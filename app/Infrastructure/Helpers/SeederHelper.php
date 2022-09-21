<?php

declare(strict_types = 1);

namespace App\Infrastructure\Helpers;

class SeederHelper
{
    /**
     * Database seeder path loader function
     *
     * @return void
     */
    public static function seederPathLoader()
    {
        $filesArr = str_replace(".php", "", glob('App\\Domains\\*\\Database\\Seeders\\*.php'));

        foreach ($filesArr as $file) {
            if (isset($file::$autoIndex) && $file !== 'DatabaseSeeder.php' && $file[0] !== ".") {
                return explode('.', $file)[0];
            }
        }
    }
}
