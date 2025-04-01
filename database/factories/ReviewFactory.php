<?php

namespace Database\Factories;

use App\Models\Review;
use App\Models\Customer;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    protected $model = Review::class;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'customer_id' => Customer::factory(),
            'product_id'  => Product::factory(),
            'content'     => $this->faker->text(200),
            'rating'      => $this->faker->numberBetween(1, 5),
        ];
    }
}
