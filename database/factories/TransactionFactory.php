<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'payment_system' => fake()->word,
            'system_transaction_id' => fake()->uuid,
            'amount' => fake()->randomFloat(2),
            'currency_code' => rand(1, 10),
            'state' => rand(1, 5),
            'comment' => fake()->sentence,
            'detail' => fake()->sentence,
        ];
    }
}
