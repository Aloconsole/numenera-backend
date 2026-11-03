<?php

namespace Database\Factories;

use App\Models\Focus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Focus>
 */
class FocusFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'description' => fake()->text(),
        ];
    }
}
