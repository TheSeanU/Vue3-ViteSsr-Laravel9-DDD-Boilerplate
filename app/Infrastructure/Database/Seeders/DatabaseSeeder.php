<?php declare(strict_types = 1);

namespace App\Infrastructure\Database\Seeders;

use App\Infrastructure\Helpers\SeederHelper;
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
