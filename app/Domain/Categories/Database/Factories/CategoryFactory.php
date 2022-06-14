<?php declare(strict_types = 1);

namespace App\Domain\Categories\Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

use App\Domain\Categories\Models\Category;
use Faker\Core\Number;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class CategoryFactory extends Factory
{
    protected $model = Category::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => (new Number)->randomDigitNotZero(),
            'product_id' => (new Number)->randomDigitNotZero(),
            'title' => $this->faker->unique()->safeEmail(),
            'body' => $this->faker->realText(200, 2),
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
