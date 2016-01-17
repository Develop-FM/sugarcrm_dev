<?php

namespace App\Bootstrap;

use Illuminate\Contracts\Foundation\Application;

class HandleExceptions extends \Illuminate\Foundation\Bootstrap\HandleExceptions
{
    /**
     * Bootstrap the given application.
     *
     * @param  \Illuminate\Contracts\Foundation\Application  $app
     * @return void
     */
    public function bootstrap(Application $app)
    {
        $this->app = $app;

        if (! config('crm.debug')) {
            error_reporting(0);
        }

        set_error_handler([$this, 'handleError']);

        set_exception_handler([$this, 'handleException']);

        register_shutdown_function([$this, 'handleShutdown']);

        if (! config('crm.debug')) {
            ini_set('display_errors', 'Off');
        }
    }
}
