<?php declare(strict_types = 1);

namespace App\Core\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */ 
    public function run()
    {
        $files_arr =  str_replace(".php", "", glob('App\\Domain\\' . "*" . '\\Database\\Seeders\\' . "*.php"));            
        foreach ($files_arr as $file){
            if (isset($file::$autoIndex) && $file !== 'DatabaseSeeder.php' && $file[0] !== "." ){
                $this->call(explode('.', $file)[0]);
            }
        }
    }
}
