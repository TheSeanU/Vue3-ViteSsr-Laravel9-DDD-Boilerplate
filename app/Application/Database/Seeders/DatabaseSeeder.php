<?php declare(strict_types = 1);

namespace App\Application\Database\Seeders;

use App\Application\Helpers\SeederHelper;
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
        $this->call((new SeederHelper)->SeederPathLoader());
    }
}
