<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Shops>
 */
class ShopsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->company(),
            'slug' => fake()->unique()->slug(),
            'image' => fake()->image('public/storage/shops'),
            'manager' => fake()->name(),
            'phone' => fake()->unique()->phoneNumber(),
            'address' => fake()->address(),
            'latitude' => fake()->latitude(),
            'longitude' => fake()->longitude(),
            'email' => fake()->unique()->companyEmail(),
            'description' => fake()->text(),
        ];
    }
}
