<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => $this->faker->text(),
            'content' => $this->faker->paragraphs(3, true),
            'author' => $this->faker->name(),
            'image' => null,
            'trang_thai' => $this->faker->boolean(),
        ];
    }
}
