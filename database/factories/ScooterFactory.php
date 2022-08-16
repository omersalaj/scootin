<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends Factory
 */
class ScooterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['name' => "string", 'color' => "string", 'description' => "string"])]
    public function definition(): array
    {
        return [
            'name' => 'SCT ' . fake()->firstName(),
            'color' => fake()->safeHexColor(),
            'description' => fake()->text(),
        ];
    }
}
