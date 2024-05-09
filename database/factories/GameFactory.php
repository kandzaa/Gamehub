<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    
    public function definition()
{
    return [
        'name' => $this->faker->word,
        'image' => $this->faker->imageUrl(),
        'description' => $this->faker->paragraph,
        'overall_rating' => $this->faker->randomFloat(1, 0, 5),
    ];
}
}
