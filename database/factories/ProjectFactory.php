<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => fake()->word(),
            'description' => fake()->boolean()
            ? fake()->text() : NULL,
            'main_image' => fake()->imageUrl(300, 300, NULL, true),
            'release_date' => fake()->date(),
            'repo_link' => fake()->url()

        ];
    }
}