<?php

namespace Database\Factories;

use App\Models\Project;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'number' => $this->faker->unique()->numerify('##'),
            'title' => $this->faker->sentence(3),
            'category' => $this->faker->randomElement([
                'E-commerce',
                'Web Application',
                'Software',
            ]),
            'description' => $this->faker->sentence(10),
            'image' => '/projects/example.png',
            'technologies' => [
                'Laravel',
                'Vue',
                'PostgreSQL',
            ],
            'url' => $this->faker->url(),
            'github_url' => 'https://github.com/example/project',
            'featured' => $this->faker->boolean(),
        ];
    }
}