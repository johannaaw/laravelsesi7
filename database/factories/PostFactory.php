<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->sentence(6),
            'body' => $this->faker->paragraph(3, true),
            'published_at' => $this->faker->optional(0.7)->dateTimeBetween('-2 years', 'now'),
        ];
    }

    public function published(){
        return $this->state([
            'published_at' => now(),
        ]);
    }
}
