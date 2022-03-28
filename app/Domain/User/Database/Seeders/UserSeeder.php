<?php declare(strict_types = 1);

namespace App\Domain\User\Database\Seeders;

use Illuminate\Database\Seeder;

use App\Domain\User\Models\User;

class UserSeeder extends Seeder
{

    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        User::factory(10)->create();
    }
}
