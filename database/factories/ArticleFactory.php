<?php

namespace Database\Factories;

use App\Models\Model;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->realText($maxNbChars = 50, $indexSize = 2),
            'content' => $this->faker->paragraph(10, false),
            'status' => $this->faker->randomElement(['Published', 'Draft'])
        ];
    }
}
