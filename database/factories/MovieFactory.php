<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class MovieFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->sentence(3),
            'year_release' => $this->faker->date(),
            'director' => $this->faker->name(),
            'genre' => $this->faker->word(),
            'duration' => $this->faker->time(),
            'synopsis' => $this->faker->text(),
            'language' => $this->faker->word(),
            'puntuaction' => $this->faker->word(),
            'actors' => $this->faker->name(),
            'image' => $this->faker->imageUrl(),
        ];
    }
}
