<?php declare(strict_types = 1);

namespace App\Domain\Products\Database\Seeders;

use Illuminate\Database\Seeder;

use App\Domain\Products\Models\Product;

class ProductSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Product::factory(10)->create();
    }
}
