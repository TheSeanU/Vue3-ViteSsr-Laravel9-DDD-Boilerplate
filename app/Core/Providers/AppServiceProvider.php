<?php

namespace App\Core\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->addMigrationFolder('App\Core\Database');
    }

    

    protected function addMigrationFolder(String $folder)
    {
        $this->loadMigrationsFrom(__DIR__.$folder.`/*/*.php`);
    }

}
