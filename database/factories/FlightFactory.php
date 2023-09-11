<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Flight>
 */
class FlightFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
         return [
            'airline' => $this->faker->name(),
            'seats_available' => 20,
            'flight_number' => $this->faker->regexify('[A-Za-z0-9]{20}'),
        ];
    }
}