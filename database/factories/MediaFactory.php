<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Media>
 */
class MediaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $fileType = fake()->randomElement(['mp4', 'png', 'jpeg']);
        return [
            'file_name' => fake()->word() .'.' . $fileType,
            'file_type' => $fileType,
            'file_size' => fake()->numberBetween(1,90),
            'url' => fake()->url(),
            'upload_date' => fake()->dateTimeBetween('-5 years', 'now'),
            'description' => fake()->sentences(rand(1,3), true),
        ];
    }
}
