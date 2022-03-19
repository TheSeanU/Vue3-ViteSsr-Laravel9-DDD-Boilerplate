<?php

namespace App\Core\Providers;

use Illuminate\Support\ServiceProvider;

class ConfigServiceProvider extends ServiceProvider
{

    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        // $this->factoryName = str_replace(".php", "", glob('App/Domain/' . "*" . '/Database/Factories/' . "*.php"));

        // $this->app->bind('path.database', function() {
        //     return realpath(glob('App/Domain/' . "*" . '/Database/Migrations/' . "*.php"));
        // });
    }
}