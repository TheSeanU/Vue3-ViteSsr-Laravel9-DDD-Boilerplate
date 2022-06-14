<?php declare(strict_types = 1);

namespace App\Domain\Images\Database\Seeders;

use Illuminate\Database\Seeder;
use App\Domain\Images\Models\Image;

class ImageSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Image::factory(10)->create();
    }
}
