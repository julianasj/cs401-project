<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Role>
 */
class RoleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $roleName = fake()->randomElement(['A', 'E', 'S']);
        return [
            'role_name' => $roleName,
            'description' => fake()->sentence(),
            'created_at' => fake()->dateTimeBetween('-5 years', 'now'),
            'updated_at' => fake()->dateTimeBetween('-4 years', 'now'),

        ];
    }
}
