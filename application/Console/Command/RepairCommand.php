<?php

namespace App\Console\Command;

use User;
use RepairAndClear;
use Illuminate\Console\Command;
use Symfony\Component\Console\Input\InputOption;

include_once('modules/Administration/QuickRepairAndRebuild.php');

class RepairCommand extends Command
{
    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'crm:repair';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Синхронизация таблиц с Vardefs, очистка кеша, восстановление таблиц аудита, расширений, разделов (Sugar Dashlets)';

    public function handle()
    {
        $GLOBALS['current_user'] = (new User())->getSystemUser();
        $_REQUEST['repair_silent'] = 1;

        $repair = new RepairAndClear();

        $repair->repairAndClearAll(['clearAll'], [$this->option('module')], false, true);
    }

    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return [
            ['module', 'm', InputOption::VALUE_OPTIONAL, 'Название модуля для которого нужно сбросить кеш', 'Все модули'],
        ];
    }
}