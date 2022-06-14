<?php declare(strict_types = 1);

namespace App\Domain\Admins\Database\Seeders;

use Illuminate\Database\Seeder;
use App\Domain\Admins\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Admin::factory(10)->create();
    }
}
