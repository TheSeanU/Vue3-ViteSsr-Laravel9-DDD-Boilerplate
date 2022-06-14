<?php declare(strict_types = 1);

namespace App\Domain\Categories\Database\Seeders;

use Illuminate\Database\Seeder;

use App\Domain\Categories\Models\ChildCategory;

class ChildCategorySeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        ChildCategory::factory(10)->create();
    }
}
