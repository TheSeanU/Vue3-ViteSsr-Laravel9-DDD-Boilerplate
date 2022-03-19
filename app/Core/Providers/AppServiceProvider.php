<?php declare(strict_types = 1);

namespace App\Core\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;

use Illuminate\Contracts\Foundation\Application;

class AppServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        
        // dd($models);
        
        /** Fixing Factory::resolveFactoryName */
        Factory::guessFactoryNamesUsing(function (string $modelName) {

            $factory = glob('App/Domain/' . "*" . '/Database/Factories/');
            foreach ($factory as $key => $value) {
                $namespace = Str::contains($modelName, "Models")
                ? Str::before($modelName, $value)
                : Str::before($modelName, "App");
            }
            
            $models = str_replace(".php", "", glob('App/Domain/' . "*" . '/Models/' . '*.php'));
            foreach ($models as $key => $value) {                
                $modelName = Str::contains($modelName, "Models")
                ? Str::after($modelName, $value)
                : Str::after($modelName, "App");
            }

            return $modelName . "Factory";
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadMigrationsFrom(glob('App/Domain/' . "*" . '/Database/Migrations/' . "*.php"));
        $this->loadMigrationsFrom(glob('App/Core/Database/Migrations/' . "*.php"));
    }

}
