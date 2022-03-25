<?php declare(strict_types = 1);

namespace App\Core\Providers;

use Illuminate\Support\ServiceProvider;
use App\Core\Traits\HelpsMapBindings;
/** 
* Class RepositoryServiceProvider 
* @package App\Core\Providers 
*/ 
class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {     
        // $models = config('app.paths');
        $models = array('Post', 'User'); 
               
        foreach ($models as $model) {
            $this->app->singleton(
                "App\\Domain\\{$model}\\Interface\\{$model}Interface", 
                "App\\Domain\\{$model}\\Repository\\{$model}Repository"
            );
        }   
    }
}
