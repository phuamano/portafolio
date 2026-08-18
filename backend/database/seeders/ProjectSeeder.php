<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'title' => '3G Maquinarias',
            'description' => 'Plataforma web para la gestión y presentación de maquinaria.',
            'image' => '../../public//projects/3g-maquinarias.png',
            'url' => null,
            'github_url' => null,
            'featured' => true,
        ]);

        Project::create([
            'title' => 'Sistema Educativo',
            'description' => 'Sistema web para la gestión de procesos educativos.',
            'image' => '../../public//projects/educativa.png',
            'url' => null,
            'github_url' => null,
            'featured' => true,
        ]);

        Project::create([
            'title' => 'Sistema Web',
            'description' => 'Aplicación web desarrollada para la gestión de información.',
            'image' => '../../public//projects/sistema.png',
            'url' => null,
            'github_url' => null,
            'featured' => false,
        ]);
    }
}
