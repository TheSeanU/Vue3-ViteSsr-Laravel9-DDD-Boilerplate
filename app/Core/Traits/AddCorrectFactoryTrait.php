<?php declare(strict_types = 1);

namespace App\Core\Traits;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Factories\Factory;

use Illuminate\Support\Str;

trait AddCorrectFactoryTrait {

    use HasFactory;
    
    protected static function newFactory()
    {     

    }
}