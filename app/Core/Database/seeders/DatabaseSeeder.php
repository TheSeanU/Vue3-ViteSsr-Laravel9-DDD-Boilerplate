<?php

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
        foreach ($this->addToDatabaseSeeder() as $seeders) 
        { 
            $this->call([$seeders . "::class",]);
        }
    }


    protected function addToDatabaseSeeder () {
        return str_replace(".php", "", glob('App/Domain/' . "*" . '/Database/Seeders/' . "*.php"));
    }

}
