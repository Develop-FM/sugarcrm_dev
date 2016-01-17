<?php

namespace App\Bootstrap;

use App\Support\Log\Writer;
use Monolog\Logger as Monolog;
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
}
