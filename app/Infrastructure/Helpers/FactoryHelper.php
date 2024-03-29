<?php

declare(strict_types = 1);

namespace App\Infrastructure\Helpers;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class FactoryHelper
{
    /**
     * Database factory path loader
     *
     * @return void
     */
    public static function factoryPathLoader()
    {
        Factory::guessFactoryNamesUsing(function (string $modelName) {
            $factoryPath = str_replace(
                ".php",
                "",
                glob('App\\Domains\\*\\Database\\Factories\\*.php'),
            );

            foreach ($factoryPath as $path) {
                $factoryModelName = str_replace('Factory', '', Str::afterlast($path, '\\'));
                if (Str::afterlast($modelName, '\\') === $factoryModelName) {
                    return $path;
                }
            }
        });
    }
}
