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
            'title' => fake()->words(rand(1,3), true),
            'content' => fake()->sentences(rand(1,3), true),
            'slug' => fake()->slug(),
            'publication_date' => fake()->dateTimeBetween('-5 years', 'now'),
            'last_modified_date' => fake()->dateTimeBetween('-4 years', 'now'),
            'status' => fake()->randomElement(['D', 'P', 'I']),
            'featured_image_url' => fake()->url(),
            'views_count' => fake()->randomNumber(),
        ];
    }
}
