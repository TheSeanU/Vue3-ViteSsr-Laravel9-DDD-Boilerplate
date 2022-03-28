<?php declare(strict_types = 1);

namespace App\Core\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Core\Database\Seeders\CoreSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */ 
    public function run()
    {
        // $this->call([
        //     \App\Domain\Auth\Database\Seeders\AuthSeeder::class,
        //     \App\Domain\User\Database\Seeders\UserSeeder::class,
        //     \App\Domain\Post\Database\Seeders\PostSeeder::class,
        // ]);


        // TODO:: make autoloader compatible with model relations.

        // $files_arr =  str_replace(".php", "", glob('App\\Domain\\' . "*" . '\\Database\\Seeders\\' . "*.php"));
        
        // dd($files_arr);
        
        // foreach ($files_arr as $file){
        //     if ($file !== 'DatabaseSeeder.php' && $file[0] !== "." ){
        //         $this->call(explode('.', $file)[0]);
        //     }
        // }
    }
}
