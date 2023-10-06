<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class BikeCategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->text(127),
            'slug' => fake()->unique()->slug(4),
            'image' => fake()->image(public_path('storage/bike_categories')),
            'description' => fake()->text(511),
        ];
    }
}
