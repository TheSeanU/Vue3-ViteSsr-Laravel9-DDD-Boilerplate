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
        
        foreach ($this->addToDatabaseSeeder() as $items)
        {
            dd($items);
            $this->call([$items]);
        }
    }


    protected function addToDatabaseSeeder () {
       return glob('App/Domain/' . "*" . '/Database/seeders/' . "/*.php");
    }

}
