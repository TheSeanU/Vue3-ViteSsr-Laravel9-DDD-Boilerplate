<?php declare(strict_types = 1);

namespace Database\Seeders;

use App\Infrastructure\Helpers\SeederHelper;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Artisan;

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
           \App\Domains\User\Database\Seeders\UserSeeder::class
        ]);
    }
}
