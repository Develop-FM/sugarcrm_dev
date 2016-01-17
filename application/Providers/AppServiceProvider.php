<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // TODO: удалить
        $GLOBALS['log'] = $this->app['log'];
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }
}
