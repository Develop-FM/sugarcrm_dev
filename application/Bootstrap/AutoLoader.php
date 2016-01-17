<?php

/*********************************************************************************
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE.  See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo. If the display of the logo is not reasonably feasible for
 * technical reasons, the Appropriate Legal Notices must display the words
 * "Powered by SugarCRM".
 ********************************************************************************/

namespace App\Bootstrap;

use Illuminate\Contracts\Foundation\Application;

class AutoLoader
{
    /**
     * @var array
     */
    protected $classMap = [
        'XTemplate'                    => 'include/XTemplate/xtpl.php',
        'ListView'                     => 'include/ListView/ListView.php',
        'Sugar_Smarty'                 => 'include/SugarSmarty/SugarSmarty.php',
        'Javascript'                   => 'include/javascript/javascript.php',
        'SugarPHPMailer'               => 'include/SugarPHPMailer.php',
        'SugarSearchEngineFullIndexer' => 'include/SugarSearchEngine/SugarSearchEngineFullIndexer.php',
        'SugarSearchEngineSyncIndexer' => 'include/SugarSearchEngine/SugarSearchEngineSyncIndexer.php',
        'SugarConfig'                  => 'include/SugarObjects/SugarConfig.php',
        'SugarApplication'             => 'include/MVC/SugarApplication.php',
        'SugarRegistry'                => 'include/SugarObjects/SugarRegistry.php',
        'BeanFactory'                  => 'data/BeanFactory.php',
        'LogicHook'                    => 'include/utils/LogicHook.php',
    ];

    /**
     * @var array
     */
    protected $noAutoLoad = [
        'Tracker',
    ];

    /**
     * @var array
     */
    protected $moduleMap = null;

    /**
     * Bootstrap the given application.
     *
     * @param Application|\App\Contracts\Foundation\Application $app
     *
     */
    public function __construct(Application $app)
    {
        spl_autoload_register([$this, 'autoload']);
    }

    /**
     * @param string $class
     *
     * @return bool
     */
    public function autoload($class)
    {
        $uClass = ucfirst($class);

        if (in_array($uClass, $this->noAutoLoad)) {
            return false;
        }

        if (isset($this->classMap[$uClass])) {
            require_once DOCROOT.$this->classMap[$uClass];

            return true;
        }

        if (is_null($this->moduleMap)) {
            if (isset($GLOBALS['beanFiles'])) {
                $this->moduleMap = $GLOBALS['beanFiles'];
            } else {
                include DOCROOT.'include/modules.php';
                $this->moduleMap = $beanFiles;
            }
        }

        if (isset($this->moduleMap[$uClass])) {
            require_once DOCROOT.$this->moduleMap[$uClass];

            return true;
        }

        if (! empty($viewPath = $this->getFilenameForViewClass($uClass))) {
            require_once DOCROOT.$viewPath;

            return true;
        }

        if (! empty($reportWidget = $this->getFilenameForSugarWidget($uClass))) {
            require_once($reportWidget);

            return true;
        }

        return false;
    }

    /**
     * @param string $class
     *
     * @return string
     */
    protected function getFilenameForViewClass($class)
    {
        $module = false;
        if (! empty($_REQUEST['module']) && substr($class, 0, strlen($_REQUEST['module'])) == $_REQUEST['module']) {
            //This is a module view
            $module = $_REQUEST['module'];
            $class  = substr($class, strlen($module));
        }

        if (substr($class, 0, 4) == "View") {
            $view = strtolower(substr($class, 4));

            if ($module) {
                $modulepath = "modules/$module/views/view.$view.php";
                if (file_exists("custom/$modulepath")) {
                    return "custom/$modulepath";
                }

                if (file_exists($modulepath)) {
                    return $modulepath;
                }
            } else {
                $basepath = "include/MVC/View/views/view.$view.php";
                if (file_exists("custom/$basepath")) {
                    return "custom/$basepath";
                }

                if (file_exists($basepath)) {
                    return $basepath;
                }
            }
        }
    }

    /**
     * getFilenameForSugarWidget
     * This method attempts to autoload classes starting with name "SugarWidget".  It first checks for the file
     * in custom/include/generic/SugarWidgets directory and if not found defaults to include/generic/SugarWidgets.
     * This method is used so that we can easily customize and extend these SugarWidget classes.
     *
     * @param string $class name of the class to load
     *
     * @return string|false file of the SugarWidget class; false if none found
     */
    protected function getFilenameForSugarWidget($class)
    {
        //Only bother to check if the class name starts with SugarWidget
        if (strpos($class, 'SugarWidget') !== false) {
            if (strpos($class, 'SugarWidgetField') !== false) {
                //We need to lowercase the portion after SugarWidgetField
                $name = substr($class, 16);
                if (! empty($name)) {
                    $class = 'SugarWidgetField'.strtolower($name);
                }
            }

            $file = get_custom_file_if_exists("include/generic/SugarWidgets/{$class}.php");
            if (file_exists($file)) {
                return $file;
            }
        }

        return false;
    }

    public function loadAll()
    {
        foreach ($this->classMap as $class => $file) {
            require_once(DOCROOT.$file);
        }

        if (isset($GLOBALS['beanFiles'])) {
            $files = $GLOBALS['beanFiles'];
        } else {
            include(DOCROOT.'include/modules.php');
            $files = $beanList;
        }

        foreach ($this->classMap as $class => $file) {
            require_once(DOCROOT.$file);
        }
    }
}