<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Rental>
 */
class RentalFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'bike_id' => rand(1, 100),
            'user_id' => rand(1, 10),
            'rental_start_datetime' => fake()->dateTime,
            'rental_end_datetime' => fake()->dateTime,
            'rental_closed_datetime' => fake()->dateTime,
            'status' => fake()->boolean,
            'description' => fake()->text,
        ];
    }
}
