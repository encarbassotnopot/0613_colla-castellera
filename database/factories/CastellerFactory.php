<?php

namespace Database\Factories;

use App\Models\Casteller;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Casteller>
 */
class CastellerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nom' => $this->faker->words(1, true),
            'posicio' => $this->faker->words(1, true),
        ];
    }
}
