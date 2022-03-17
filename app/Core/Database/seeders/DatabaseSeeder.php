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
        $this->call([
            UserSeeder::class,
            foreach ($this->addToDatabaseSeeder() as $items)
            {
                return $items
            }
        ]);
    }


    public function addToDatabaseSeeder () {
        
    }

}
