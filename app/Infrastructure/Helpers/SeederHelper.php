<?php

declare(strict_types = 1);

namespace App\Infrastructure\Helpers;

class SeederHelper
{
    public static function SeederPathLoader()
    {
        $files_arr = str_replace(".php", "", glob('App\\Domain\\' . "*" . '\\Database\\Seeders\\' . "*.php"));

        foreach ($files_arr as $file) {
            if (isset($file::$autoIndex) && $file !== 'DatabaseSeeder.php' && $file[0] !== ".") {
                return explode('.', $file)[0];
            }
        }
    }
}
