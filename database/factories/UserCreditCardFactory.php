<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\UserCreditCard>
 */
class UserCreditCardFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'user_profile_id' => rand(1, 10),
            'phone_code' => rand(99800, 99999),
            'phone_number' => rand(1000000, 9999999),
            'card_number' => fake()->creditCardNumber,
            'expiration_date' => fake()->creditCardExpirationDateString,
            'main' => fake()->boolean(20),
            'status' => fake()->randomElement(['pending', 'inactive', 'active']),
            'detail' => fake()->sentence,
        ];
    }
}
