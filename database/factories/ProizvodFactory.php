<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Proizvod>
 */
class ProizvodFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "naziv" => fake()->name(),
            "cijena" => fake()->randomFloat(2, 20, 600),
            "opis" => fake()->text(150),
            "slika" => fake()->imageUrl(),
            "broj_kupnji" => fake()->numberBetween(0, 50)
        ];
    }
}
