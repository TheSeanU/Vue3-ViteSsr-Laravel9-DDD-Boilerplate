<?php declare(strict_types = 1);

namespace App\Core\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;

class FactoryServiceProvider extends ServiceProvider
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
        Factory::guessFactoryNamesUsing(function (string $modelName) {
            $factory_path = str_replace(".php", "", 
                glob('App\\Domain\\' . "*" . '\\Database\\Factories\\' . "*.php")
            );
            
            foreach ($factory_path as $key => $path) {
                $factoryModelName = str_replace('Factory', '', Str::afterlast($path, '\\'));              
                if(Str::afterlast($modelName, '\\') ===  $factoryModelName) {
                    return $path;
                }
            }
        }); 
    }
}
