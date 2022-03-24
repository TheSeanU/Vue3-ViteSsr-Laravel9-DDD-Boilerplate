<?php declare(strict_types = 1);

namespace App\Core\Providers; 

use Illuminate\Support\ServiceProvider; 

use App\Core\Interface\RepositoryInterface; 
use App\Core\Repository\BaseRepository;

use App\Core\Providers\loader;
use Illuminate\Support\Facades\App;

$list = str_replace(".php", "", glob('App\\Domain\\' . "*" . '\\Repository\\' . "*.php"));

$results = array_map(function ($element) {
   return "use" . ' ' . $element . ';';
}, $list);

$results();
/** 
* Class RepositoryServiceProvider 
* @package App\Core\Providers 
*/ 
class RepositoryServiceProvider extends ServiceProvider
{
   // use loader;

   /** 
    * Register services. 
    * 
    * @return void  
    */ 
   public function register() 
   {

      dd(UserRepository::class);
   //    dd($this->each());
   
   //   App::bind(
   //      $this->each(str_replace(".php","",glob('App\\Domain\\' . "*" . '\\Repository\\' . "*.php"))), 
   //      $this->each(str_replace(".php", "", glob('App\\Domain\\' . "*" . '\\Interface\\' . "*.php"))) 
   //   );     
   } 
}
