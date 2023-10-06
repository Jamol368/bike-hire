<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Invoice>
 */
class InvoiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'rental_id' => rand(1, 100),
            'hours' => rand(1, 20),
            'penalty_hours' => rand(0, 2),
            'amount' => fake()->randomFloat(2, 10, 100),
            'penalty_amount' => rand(0, 5),
            'total' => fake()->randomFloat(2, 10, 100),
            'payment_status' => fake()->boolean,
        ];
    }
}
