<?php declare(strict_types = 1);

namespace App\Core\Providers; 

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\ServiceProvider; 

use App\Core\Interface\RepositoryInterface; 
use App\Core\Repository\BaseRepository;


use App\Domain\Post\Interface\PostInterface;
use App\Domain\Post\Repository\PostRepository;
use App\Domain\User\Interface\UserInterface;
use App\Domain\User\Repository\UserRepository;

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
        $filePath = config_path('repositories.php');


         dd($filePath);

        if ((new Filesystem())->exists($filePath)) {
            $repositories = config('repositories');

            foreach($repositories as $interface => $repository) {
                $this->app->singleton(
                    $interface,
                    $repository
                );
            }
        }
    }


   // /** 
   //  * Register services. 
   //  * 
   //  * @return void  
   //  */ 

   // public function register() 
   // {
   //    // TODO:: make a autobinder;
   //    $this->app->bind(RepositoryInterface::class, BaseRepository::class);
   //    $this->app->bind(UserInterface::class, UserRepository::class);
   //    $this->app->bind(PostInterface::class, PostRepository::class);
   // }

}
