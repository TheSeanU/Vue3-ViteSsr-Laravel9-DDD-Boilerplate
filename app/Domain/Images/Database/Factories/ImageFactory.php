<?php declare(strict_types = 1);

namespace App\Domain\Images\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Domain\Images\Models\Image;
use Faker\Core\Number;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ImageFactory extends Factory
{
    protected $model = Image::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => (new Number)->randomDigitNotZero(),
            'blob' => (new Number)->randomDigitNotZero(),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     *
     * @return static
     */
    public function unverified()
    {
        
    }
}
