<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Seeder;

class ProjectSeeder extends Seeder
{
    public function run(): void
    {
        Project::truncate();

        Project::create([
            'number' => '01',
            'title' => '3G Maquinarias',
            'category' => 'Web Application',
            'description' => 'Plataforma web para la presentación y gestión de maquinaria.',
            'image' => '/projects/3g-maquinarias.png',
            'technologies' => [
                'Laravel',
                'Vue',
                'PostgreSQL',
                'Tailwind CSS',
            ],
            'url' => null,
            'github_url' => null,
            'featured' => true,
        ]);

        Project::create([
            'number' => '02',
            'title' => 'Sistema Educativo',
            'category' => 'Software',
            'description' => 'Sistema web desarrollado para la gestión de procesos educativos.',
            'image' => '/projects/educativa.png',
            'technologies' => [
                'Laravel',
                'Vue',
                'MySQL',
                'Tailwind CSS',
            ],
            'url' => null,
            'github_url' => null,
            'featured' => true,
        ]);

        Project::create([
            'number' => '03',
            'title' => 'Sistema Web',
            'category' => 'Web Application',
            'description' => 'Aplicación web desarrollada para la gestión de información.',
            'image' => '/projects/sistema.png',
            'technologies' => [
                'Laravel',
                'Vue',
                'MySQL',
                'JavaScript',
            ],
            'url' => null,
            'github_url' => null,
            'featured' => false,
        ]);
    }
}