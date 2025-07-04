<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tag>
 */
class TagFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'tag_name' => '@' . fake()-> word(),
            'slug' => fake()->slug(),
            'created_at' => fake()->dateTimeBetween('-5 years', 'now'),
            'updated_at' => fake()->dateTimeBetween('-4 years', 'now'),
        ];
    }
}
