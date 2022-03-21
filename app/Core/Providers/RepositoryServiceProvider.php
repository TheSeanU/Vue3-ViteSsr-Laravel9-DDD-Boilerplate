<?php declare(strict_types = 1);

namespace App\Core\Providers; 

use App\Core\Interface\RepositoryInterface; 
use App\Core\Repository\BaseRepository; 

use Illuminate\Support\ServiceProvider; 
use Illuminate\Support\Str;



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
    * Register services. 
    * 
    * @return void  
    */ 
   public function register() 
   { 
         $this->app->bind(RepositoryInterface::class, BaseRepository::class);
         
         $this->app->bind(PostInterface::class, PostRepository::class);
         $this->app->bind(UserInterface::class, UserRepository::class);


  

        // $repositoryPath = str_replace(".php", "", 
        //     glob('App\\Domain\\' . "*" . '\\Repository\\' . "*.php")
        // );
        // $interfacePath = str_replace(".php", "", 
        //     glob('App\\Domain\\' . "*" . '\\Interface\\' . "*.php")
        // );
        
        // foreach ($repositoryPath as $key => $r_path) {
        //     foreach ($interfacePath as $key => $i_path) {
        //         $repository = Str::afterlast($r_path, '\\');
        //         $interface = Str::afterlast($i_path, '\\');
                
        //         $this->app->bind(RepositoryInterface::class, BaseRepository::class);
        //         $this->app->bind($repository . '::class', $interface . '::class');
        //     }
        // }
   }
}