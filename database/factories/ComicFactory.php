<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comic>
 */


class ComicFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        // titolo unito tra title e name
        $parte1 = $this->faker->title();
        $parte2 = $this->faker->name();
        return [
            'titolo'=>$parte1.$parte2,
            'numero_volume'=>fake()->numberBetween(0,500),
            'anno_pubblicazione'=>fake()->numberBetween(1920,2024),
            'descrizione'=>fake()->sentences(4,true),
        ];
    }
}
