<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Jugadores>
 */
class JugadoresFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name'=>fake()->name(),
            'last_name'=>fake()->last_name(),
            'age'=>fake()->age(),
            'calification'=>fake()->calification(),
            'description'=>fake()->description(),
        ];
    }
}
