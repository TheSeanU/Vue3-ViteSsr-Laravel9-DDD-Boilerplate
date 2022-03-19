<?php

namespace App\Domain\Auth\Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Domain\Auth\Models\Auth;

class AuthSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Auth::factory(10)->create();
    }
}
