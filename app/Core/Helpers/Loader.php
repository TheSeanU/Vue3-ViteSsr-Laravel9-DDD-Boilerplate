<?php 

namespace App\Core\Helpers;

use Illuminate\Support\Str;

class Loader {

    public static function returnModels()
    {
        $models = str_replace(".php", "", glob('App/Domain/' . "*" . '/Models/' . '*.php' . "\n"));
        $name = array_map(function($str) {
            return Str::afterLast($str, '\\');
        }, $models);

        return $name;
    }
}
