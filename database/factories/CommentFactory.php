<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'comment_content' => Str::limit(fake()->sentences(rand(1,5), true), 255),
            'comment_date' => fake()->dateTimeBetween('-5 years', 'now'),
            'reviewer_name' => fake()->name(),
            'reviewer_email' => fake()->unique()->safeEmail(),
            'is_hidden' => fake()->boolean(),
            
        ];
    }
}
