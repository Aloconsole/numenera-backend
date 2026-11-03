<?php

namespace Database\Factories;

use App\Models\Character;
use App\Models\Descriptor;
use App\Models\Focus;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Character>
 */
class CharacterFactory extends Factory
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
            'lastname' => fake()->lastname(),
            'description' => fake()->text(),
            'descriptor_id' => Descriptor::factory(),
            'focus_id' => Focus::factory(),
        ];
    }
}
