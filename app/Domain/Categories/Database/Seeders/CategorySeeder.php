<?php declare(strict_types = 1);

namespace App\Domain\Categories\Database\Seeders;

use Illuminate\Database\Seeder;

use App\Domain\Categories\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Category::factory(10)->create();
    }
}
