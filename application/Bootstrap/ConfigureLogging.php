<?php

namespace App\Bootstrap;

use App\Support\Log\Writer;
use Monolog\Logger as Monolog;
use Monolog\Handler\StreamHandler;
use Illuminate\Contracts\Foundation\Application;

class ConfigureLogging extends \Illuminate\Foundation\Bootstrap\ConfigureLogging
{
    /**
     * Register the logger instance in the container.
     *
     * @param  \Illuminate\Contracts\Foundation\Application $app
     *
     * @return \Illuminate\Log\Writer
     */
    protected function registerLogger(Application $app)
    {
        $app->instance('log', $log = new Writer(new Monolog($app->environment()), $app['events']));

        return $log;
    }

    /**
     * Configure the Monolog handlers for the application.
     *
     * @param  \Illuminate\Contracts\Foundation\Application  $app
     * @param  \Illuminate\Log\Writer  $log
     * @return void
     */
    protected function configureDailyHandler(Application $app, Writer $log)
    {
        $log->useDailyFiles(
            storage_path('/logs/laravel.log'),
            config('app.log_max_files', 5),
            config('app.log_level', 'debug')
        );
    }
}
