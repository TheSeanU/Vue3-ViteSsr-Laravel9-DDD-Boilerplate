<?php declare(strict_types = 1);

namespace App\Core\Traits;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Domain\Users\Database\Factories\UserFactory;
use App\Domain\Auth\Database\Factories\AuthFactory;


trait AddCorrectFactoryTrait {

    use HasFactory;
    
    protected static function newFactory()
    {
        // return AuthFactory::new();

        // $factory = str_replace(".php", "", glob('App\\Domain\\' . "*" . '\\Database\\Factories\\' . "*.php"));
        
        // foreach ($factory as $key => $value) {
        //    return $value::new();
        // }       
    }
}