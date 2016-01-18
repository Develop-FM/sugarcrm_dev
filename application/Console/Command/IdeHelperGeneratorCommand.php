<?php

namespace App\Console\Command;

use Arr;
use DirectoryIterator;
use SugarRelationshipFactory;
use Illuminate\Console\Command;

class IdeHelperGeneratorCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'ide:helper:generate';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Генерация вспомогательного файла для IDE';

    public function handle()
    {
        $path = DOCROOT.'cache'.DIRECTORY_SEPARATOR.'modules';

        $helperFile = DOCROOT.'_ide_helper.php';

        $phpDoc = '<?php '.PHP_EOL.PHP_EOL;

        foreach (new DirectoryIterator($path) as $directory) {
            if (! $directory->isDir()) {
                continue;
            }

            foreach (new DirectoryIterator($directory->getRealPath()) as $file) {
                if (! $file->isFile() || $file->getExtension() != 'php') {
                    continue;
                }

                if (($pos = strpos($file->getFilename(), 'vardefs')) === false) {
                    continue;
                }

                $class = substr($file->getFilename(), 0, $pos);

                $this->info($class);

                include_once($file->getRealPath());

                if (isset($GLOBALS['dictionary'][$class])) {
                    $vardef = $GLOBALS['dictionary'][$class];

                    $phpDoc .= "/**".PHP_EOL;
                    $phpDoc .= " * Class {$class}".PHP_EOL;
                    $phpDoc .= " *".PHP_EOL;
                    $fields = [];

                    if (isset($vardef['fields']) and is_array($vardef['fields'])) {

                        $fields = $vardef['fields'];
                        usort($fields, function ($a, $b) {
                            $typeA = $this->getType($a);
                            $typeB = $this->getType($b);

                            if ($typeA == $typeB) {
                                return 0;
                            }

                            return ($typeA < $typeB) ? -1 : 1;
                        });
                    }

                    foreach ($fields as $field) {
                        $phpDoc .= $this->addProperty($field);
                    }

                    $phpDoc .= " *".PHP_EOL;

                    foreach ($fields as $field) {
                        $phpDoc .= $this->addMethod($field);
                    }

                    $phpDoc .= " *".PHP_EOL;
                    $phpDoc .= " */".PHP_EOL;

                    $phpDoc .= "class {$class} {".PHP_EOL;

                    foreach ($fields as $field) {
                        $phpDoc .= $this->addField($field);
                    }

                    $phpDoc .= "\tpublic \$relationship_fields = [".PHP_EOL;

                    foreach ($fields as $field) {
                        $phpDoc .= $this->addRealationField($field);
                    }

                    $phpDoc .= "\t];".PHP_EOL;

                    $phpDoc .= PHP_EOL."}".PHP_EOL.PHP_EOL;
                }
            }
        }

        file_put_contents($helperFile, $phpDoc);
    }

    /**
     * @param array $field
     *
     * @return string|void
     */
    protected function addRealationField($field)
    {
        if (($type = array_get($field, 'type', 'string')) != 'relate') {
            return;
        }

        $idName = array_get($field, 'id_name');
        $link   = array_get($field, 'link');

        if (empty($link) or empty($idName)) {
            return;
        }

        return "\t\t'{$idName}' => '{$link}',".PHP_EOL;
    }

    /**
     * @param array $field
     *
     * @return string
     */
    protected function addField($field)
    {
        $name        = array_get($field, 'name');
        $type        = $this->getType($field);
        $description = array_get($field, 'comment', '');

        if (array_get($field, 'type') == 'upload') {
            $description .= ' ['.array_get($field, 'valid_types').']';
        }

        return "\t/** \n\t * @var {$type} {$description}\n\t */\n\t public \${$name};".PHP_EOL.PHP_EOL;
    }

    /**
     * @param array $field
     *
     * @return string
     */
    protected function addProperty($field)
    {
        $type = $this->getType($field);
        $name = array_get($field, 'name');

        $description = array_get($field, 'comment', '');

        if (array_get($field, 'type') == 'upload') {
            $description .= ' ['.array_get($field, 'valid_types').']';
        }

        return " * @property {$type} {$name} {$description}".PHP_EOL;
    }

    /**
     * @param array $field
     *
     * @return string
     */
    protected function addMethod($field)
    {
        $_type = array_get($field, 'type');
        if (! in_array($_type, ['relate', 'link'])) {
            return;
        }

        $type = $this->getType($field);
        $name = ucfirst(array_get($field, 'name'));

        if ($_type == 'link') {
            $class = $this->getBeanByModule(array_get($field, 'module', 'SugarBean'));
            if (empty($class)) {
                if (! empty($field['side']) and ! empty($field['relationship'])) {
                    $relationship = SugarRelationshipFactory::getInstance()->getRelationshipDef($field['relationship']);

                    if ($field['side'] == 'left') {
                        $module = array_get($relationship, "relationships.{$field['relationship']}.lhs_module");
                    } else {
                        $module = array_get($relationship, "relationships.{$field['relationship']}.rhs_module");
                    }
                } else {
                    return;
                }
            } else {
                $module = array_get($field, 'module', 'SugarBean');
            }

            $type = $this->getBeanByModule($module).'[]';
        }

        return " * @method {$type} getRelated{$name}".PHP_EOL;
    }

    /**
     * @param array $field
     *
     * @return string
     */
    protected function getType($field)
    {
        $type = array_get($field, 'type', 'string');

        switch ($type) {
            case 'bool':
                return 'bool';
            case 'link':
                return load_link_class($field);
            case 'relate':
                return $this->getBeanByModule(array_get($field, 'module', 'SugarBean'));
        }

        return 'string';
    }

    /**
     * @param string $module
     *
     * @return string
     */
    protected function getBeanByModule($module)
    {
        global $beanList;

        return array_get($beanList, $module);
    }
}