<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Technology;

class TechnologySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Technology::truncate();

$technologies = [
    [
        'name' => 'Laravel',
        'type' => 'Backend',
        'slug' => 'laravel',
        'sort_order' => 1,
    ],
    [
        'name' => 'Vue',
        'type' => 'Frontend',
        'slug' => 'vue',
        'sort_order' => 2,
    ],
    [
        'name' => 'PHP',
        'type' => 'Backend',
        'slug' => 'php',
        'sort_order' => 3,
    ],
    [
        'name' => 'JavaScript',
        'type' => 'Frontend',
        'slug' => 'javascript',
        'sort_order' => 4,
    ],
    [
        'name' => 'PostgreSQL',
        'type' => 'Database',
        'slug' => 'postgresql',
        'sort_order' => 5,
    ],
    [
        'name' => 'MySQL',
        'type' => 'Database',
        'slug' => 'mysql',
        'sort_order' => 6,
    ],
    [
        'name' => 'Docker',
        'type' => 'Infrastructure',
        'slug' => 'docker',
        'sort_order' => 7,
    ],
    [
        'name' => 'Tailwind',
        'type' => 'Frontend',
        'slug' => 'tailwind',
        'sort_order' => 8,
    ],
];

        foreach ($technologies as $technology) {
            Technology::create($technology);
        }
    }
}
