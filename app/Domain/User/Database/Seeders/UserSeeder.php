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

        $basic = [
            'name' => 'Sean',
            'last_name' => 'Unett',
            'email' => 'test@test.com',
            'email_verified_at' => now(),
            'phone' => '0612345678',
            'password' => bcrypt('123456'),
        ];

        User::create($basic);
    }
}
