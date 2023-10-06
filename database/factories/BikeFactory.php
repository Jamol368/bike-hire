<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bike>
 */
class BikeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'bike_category_id' => rand(1, 10),
            'shop_id' => rand(1, 10),
            'name' => fake()->text(63),
            'slug' => fake()->unique()->slug(3),
            'price' => fake()->randomFloat(2, 10, 50),
            'penalty' => fake()->randomFloat(2, 1, 5),
            'discount' => fake()->randomFloat(2, 0, 5),
            'status' => fake()->boolean,
        ];
    }
}
