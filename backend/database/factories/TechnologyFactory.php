<?php

namespace Database\Factories;

use App\Models\Technology;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Technology>
 */
class TechnologyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->word(),
            'type' => $this->faker->randomElement([
                'Backend',
                'Frontend',
                'Database',
                'Infrastructure',
            ]),
            'slug' => $this->faker->unique()->slug(),
            'icon' => null,
            'sort_order' => $this->faker->numberBetween(1, 20),
            'is_active' => true,
        ];
    }
}