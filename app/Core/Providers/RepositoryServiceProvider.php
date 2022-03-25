<?php declare(strict_types = 1);

namespace App\Core\Providers;

use App\Core\Helpers\InterfaceLoader;
use Illuminate\Support\ServiceProvider;

use Illuminate\Foundation\Http\Kernel;
use App\Core\Traits\HelpsMapBindings;
/** 
* Class RepositoryServiceProvider 
* @package App\Core\Providers 
*/ 
class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * All of the container bindings that should be registered.
     *
     * @var array
     */
    public $bindings = [
        InterfaceLoader::interfaceRepository(),
    ];


    /**
     * Register any application services.
     *
     * @return void
     */
    // public function register()
    // {     
    //     $models = config('app.paths');
    //     // $models2 = array('Post', 'User'); 
               

    //     // dd($models, $models2);


    //     foreach ($models as $model) {
    //         $this->app->singleton(
    //             "App\\Domain\\{$model}\\Interface\\{$model}Interface", 
    //             "App\\Domain\\{$model}\\Repository\\{$model}Repository"
    //         );
    //     }   
    // }
}
