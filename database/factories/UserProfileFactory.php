<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserProfile>
 */
class UserProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_id' => fake()->unique()->numberBetween(1, 10),
            'phone_code' => rand(99800, 99999),
            'phone_number' => rand(1000000, 9999999),
            'balance' => fake()->randomFloat(2),
            'address' => fake()->address,
            'latitude' => fake()->latitude,
            'longitude' => fake()->longitude,
            'status' => rand(1, 3),
        ];
    }
}
