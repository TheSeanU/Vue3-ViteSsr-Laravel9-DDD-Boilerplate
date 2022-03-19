<?php

namespace App\Core\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Domain\Users\Database\Seeders\UserTableSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */ 
    public function run()
    {
        $files_arr =  str_replace(".php", "", glob('App\\Domain\\' . "*" . '\\Database\\Seeders\\' . "*.php")); //store filenames into $files_array
        foreach ($files_arr as $key => $file){
            if ($file !== 'DatabaseSeeder.php' && $file[0] !== "." ){
                $this->call( explode('.', $file)[0] );
            }
        }
    }
}
