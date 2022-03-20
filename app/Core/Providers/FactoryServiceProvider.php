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
        Factory::guessFactoryNamesUsing(function (string $modelName) {
            $factory_path = str_replace(".php", "", 
                glob('App\\Domain\\' . "*" . '\\Database\\Factories\\' . "*.php")
            );
            
            foreach ($factory_path as $key => $path){
                return match ($modelName) {
                    $modelName => $path,
                    default => throw new LogicException('Unknown factory'),
                };
            }
        }); 
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
