<?php

namespace App\Bootstrap;

use Illuminate\Contracts\Foundation\Application;

class LoadConfiguration
{

    /**
     * Bootstrap the given application.
     *
     * @param  Application $app
     *
     * @return void
     */
    public function bootstrap(Application $app)
    {
        global $sugar_config;

        // config|_override.php
        if (is_file($configFile = DOCROOT.'config.php')) {
            $config = require_once $configFile;

            config([
                'crm' => array_merge(config('crm'), $config)
            ]);
        }

        $sugar_config = config('crm');

        if (is_file(DOCROOT . 'config_override.php')) {
            require_once(DOCROOT . 'config_override.php');
        }

        $app['config']->set('crm', $sugar_config);
        $app['config']->set('database.connections.mysql', array_get($sugar_config, 'database'));
    }
}
