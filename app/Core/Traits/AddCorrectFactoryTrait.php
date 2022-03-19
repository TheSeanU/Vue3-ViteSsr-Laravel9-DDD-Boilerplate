<?php
namespace App\Core\Traits;

use Illuminate\Database\Eloquent\Factories\HasFactory;

use App\Core\Helpers\RouteList;

trait AddCorrectFactoryTrait {

    use HasFactory;
    
    protected static function newFactory($count = null, $state = [])
    {
        $factory = str_replace(".php", "", glob('App\\Domain\\' . "*" . '\\Database\\Factories\\' . "*.php"));
        
        foreach ($factory as $key => $value) {

            dd($value);
           return $value::new();
        }       
    }
}