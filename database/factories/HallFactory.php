<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hall>
 */
class HallFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'hall_number' => fake()->unique()->numberBetween(100, 999),
            'location' => fake()->address,
            'capacity' => fake()->numberBetween(20, 500),
            'description' => fake()->paragraph,
            'status' => 'active',
            'image' => fake()->imageUrl(),
            'user_id' => 1,
        ];

    }
}
