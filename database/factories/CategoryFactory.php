<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categoryName = fake()->randomElement(['News', 'Review', 'Podcast', 'Opinion']);
        return [
            'category_name' => $categoryName,
            'slug' => fake()->slug(),
            'description' => fake()->sentences(rand(1,3), true),
            'created_at' => fake()->dateTimeBetween('-5 years', 'now'),
            'updated_at' => fake()->dateTimeBetween('-4 years', 'now'),
        ];
    }
}
