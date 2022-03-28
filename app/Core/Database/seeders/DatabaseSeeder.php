<?php declare(strict_types = 1);

namespace App\Core\Database\Seeders;

use App\Core\Helpers\SeederHelper;
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
