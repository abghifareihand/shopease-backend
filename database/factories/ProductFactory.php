<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'category_id' => fake()->numberBetween(1, 5),
            'name' => fake()->name(),
            'description' => fake()->text(),
            'image' => fake()->imageUrl(),
            'price' => fake()->numberBetween(100000, 300000),
            'stock' => fake()->randomNumber(2),
        ];
    }
}
