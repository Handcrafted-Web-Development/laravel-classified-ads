<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Task>
 */
class AdFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => fake()->text(15),
            'description' => fake()->text(35),
            'price' => fake()->randomFloat(2, 10, 1000),
            'year' => fake()->year(),
            'size' => fake()->randomFloat(2, 5, 50),
            'brand' => fake()->company(),
            'due_date' => now(),
            'guarantee' => fake()->text(35),
            'exchange' => fake()->boolean(['0', '1']),
            'author_id' => User::factory()
        ];
    }
}
