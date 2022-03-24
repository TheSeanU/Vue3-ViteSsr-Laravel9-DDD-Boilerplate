<?php declare(strict_types = 1);

namespace App\Core\Providers; 

use Illuminate\Support\ServiceProvider; 

use App\Core\Interface\RepositoryInterface; 
use App\Core\Repository\BaseRepository;


use App\Domain\Post\Interface\PostInterface;
use App\Domain\Post\Repository\PostRepository;
use App\Domain\User\Interface\UserInterface;
use App\Domain\User\Repository\UserRepository;


$repository = str_replace(".php", "", glob(app_path('Domain\\' . "*" . '\\Repository\\' . '*.php')));
$repositoryMap = array_map(function ($paths) {
   return 'use ' . $paths;
}, $repository);

$repositoryMap;

$interface = str_replace(".php", "", glob(app_path('Domain\\' . "*" . '\\Interface\\' . '*.php')));
$interfaceMap = array_map(function ($paths) {
   return $paths;
}, $interface);

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
      // TODO:: make a autobinder;
      $this->app->bind(RepositoryInterface::class, BaseRepository::class);
      $this->app->bind(UserInterface::class, UserRepository::class);
      $this->app->bind(PostInterface::class, PostRepository::class);
   }

}
