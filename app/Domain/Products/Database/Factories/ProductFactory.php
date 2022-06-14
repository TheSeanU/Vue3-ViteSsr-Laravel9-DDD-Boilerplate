<?php declare(strict_types = 1);

namespace App\Domain\Products\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

use App\Domain\Products\Models\Product;
use Faker\Core\Number;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class ProductFactory extends Factory
{
    protected $model = Product::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => (new Number)->randomDigitNotZero(),
            'price' => Str::random(3),
            'user_id' => (new Number)->randomDigitNotZero(),

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
