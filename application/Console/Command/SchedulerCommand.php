<?php

namespace App\Console\Command;

use User;
use Scheduler;
use Exception;
use Illuminate\Console\Command;

class SchedulerCommand extends Command
{

    /**
     * The console command name.
     *
     * @var string
     */
    protected $name = 'crm:scheduler:run';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Run scheduler';

    public function handle()
    {
        global $current_language, $current_user;

        if (empty($current_language)) {
            $current_language = config('crm.default_language');
        }

        $app_list_strings = return_app_list_strings_language($current_language);
        $app_strings      = return_application_language($current_language);

        $current_user = (new User())->getSystemUser();

        $pidFilePath = $this->getPidFilePath();

        require_once($pidFilePath);

        if ($timestamp[0] <= strtotime(date('H:i'))) {
            write_array_to_file('timestamp', [strtotime(date('H:i'))], $pidFilePath);
            require(DOCROOT.'modules/Schedulers/Scheduler.php');

            $scheduler = new Scheduler();
            $scheduler->flushDeadJobs();
            $scheduler->checkPendingJobs();

        } else {
            throw new Exception('If you see a whole string of these, there is a chance someone is attacking your system.');
        }
    }

    /**
     * @return string
     * @throws Exception
     */
    protected function getPidFilePath()
    {
        $cachePath = config('crm.cache_dir') . 'modules/Schedulers';
        $pid       = 'pid.php';

        $pidFilePath = $cachePath . DIRECTORY_SEPARATOR . $pid;

        if (! is_dir($cachePath)) {
            mkdir_recursive($cachePath);
        }

        if (! is_file($pidFilePath)) {
            if (! is_writable($cachePath)) {
                throw new Exception('Scheduler cannot write PID file.  Please check permissions on ' . $pidFilePath);
            }

            write_array_to_file('timestamp', [strtotime(date('H:i'))], $pidFilePath);
        } else if (! is_writable($pidFilePath)) {
            throw new Exception('Scheduler cannot read the PID file.  Please check permissions on ' . $pidFilePath);
        }

        return $pidFilePath;
    }
}