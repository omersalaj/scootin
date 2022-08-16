<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use JetBrains\PhpStorm\ArrayShape;

/**
 * @extends Factory
 */
class PointFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    #[ArrayShape(['lat' => "float", 'lng' => "float"])]
    public function definition(): array
    {
        return [
            // Latitude should always be between -90 and 90.
            'lat' => fake()->latitude(),
            // Longitude should always be between -180 and 180.
            'lng' => fake()->longitude(),
        ];
    }
}
