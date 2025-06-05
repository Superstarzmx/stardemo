<?php

namespace Superstarzmx\Stardemo;

use Illuminate\Support\ServiceProvider;

class StardemoServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //$this->loadMigrationsFrom(__DIR__.'/../migrations');


    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('stardemo', function () {
            return new Logok;
        });
    }
}
