<?php declare(strict_types = 1);

namespace App\Domains\User\Database\Seeders;

use Illuminate\Database\Seeder;
use App\Domains\User\Models\User;

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

        $basic = [
            'name' => 'Sean',
            'email' => 'test@test.com',
            'email_verified_at' => now(),
            'password' => bcrypt('123456'),
        ];

        User::create($basic);
    }
}
