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
            'name' => $this->faker->name,
            'hall_number' => $this->faker->unique()->numberBetween(100, 999),
            'location' => $this->faker->address,
            'capacity' => $this->faker->numberBetween(20, 500),
            'description' => $this->faker->paragraph,
            'status' => 'active',
            'image' => $this->faker->imageUrl(),
            'user_id' => 1,
            'category_id' => 1,
        ];
    }
}
