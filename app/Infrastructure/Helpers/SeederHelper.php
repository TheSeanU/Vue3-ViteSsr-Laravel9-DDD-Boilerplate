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
        $filesArr = glob('App\\Domains\\*\\Database\\Seeders\\*.php');
        
        for ($file = 0; $file < $filesArr; $file++) {
            if (file_exists($filesArr[$file]) && !str_contains($filesArr[$file], 'DatabaseSeeder')) {
                return get_class($filesArr[$file]);
            }
        }


        // dd(array_map('returnArr', $filesArr));

        // foreach ($filesArr as $file) {
        //     dd(isset($file::$autoIndex));


        //     if (isset($file::$autoIndex) && $file !== 'DatabaseSeeder.php' && $file[0] !== ".") {
        //         return class_basename($file)[0];
        //     }
        // }
    }
}
