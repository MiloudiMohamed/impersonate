<?php

namespace Devmi\Impersonate;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Devmi\Impersonate\Middleware\Impersonate;

class ImpersonateServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {

        $this->loadRoutesFrom( __DIR__ . '/routes.php');
        $this->loadViewsFrom(__DIR__ . '/views', 'Impersonate');

        $this->publishes([
            __DIR__ . '/config/impersonate.php' => config_path('impersonate.php')
        ]);


        Blade::if('impersonating', function() {
            return session()->has('impersonate');
        });

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . ' /config/impersonate.php', 'impersonate'
        );
        $this->app->make('Devmi\Impersonate\Http\Controllers\ImpersonateController');
    }
}
