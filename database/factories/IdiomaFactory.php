<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Idioma>
 */
class IdiomaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'alpha2' => fake()->sentence(),
            'alpha3' => fake()->randomNumber(2, false),
            'alpha3b' => fake()->randomNumber(2, false),
            'english_name' => fake()->sentence(),
            'native_name' => fake()->sentence(),
        ];
    }
}
