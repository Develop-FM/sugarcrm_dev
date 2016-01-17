<?php

namespace App\Console;

use App\Console\Command\RepairCommand;
use App\Console\Command\SchedulerCommand;
use App\Console\Command\CacheClearCommand;
use Illuminate\Console\Scheduling\Schedule;
use App\Console\Command\RepairTeamsCommand;
use App\Console\Command\DbTablesDiffCommand;
use App\Console\Command\UserPublishKeysCommand;
use App\Console\Command\RegenerateShippingKeys;
use App\Console\Command\EmailSettingsFixCommand;
use App\Console\Command\EmailSettingsTestCommand;
use App\Console\Command\IdeHelperGeneratorCommand;
use App\Console\Command\RebuildRelationshipsCommand;
use App\Console\Command\RepairUserPublishKeyCommand;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    /**
     * The bootstrap classes for the application.
     *
     * @var array
     */
    protected $bootstrappers = [
        'Illuminate\Foundation\Bootstrap\DetectEnvironment',
        'Illuminate\Foundation\Bootstrap\LoadConfiguration',
        'Illuminate\Foundation\Bootstrap\ConfigureLogging',
        'Illuminate\Foundation\Bootstrap\RegisterFacades',
        'Illuminate\Foundation\Bootstrap\SetRequestForConsole',
        'Illuminate\Foundation\Bootstrap\RegisterProviders',
        'Illuminate\Foundation\Bootstrap\BootProviders',
        'App\Bootstrap\LoadConfiguration',
        'App\Bootstrap\HandleExceptions',
    ];

    /**
     * The Artisan commands provided by the application.
     *
     * @var array
     */
    protected $commands = [
        CacheClearCommand::class,
        IdeHelperGeneratorCommand::class
    ];

    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule $schedule
     *
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {

    }
}
