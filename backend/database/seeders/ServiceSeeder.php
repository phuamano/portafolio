<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::truncate();

        Service::create([
            'number' => '01',
            'title' => 'Web & Apps',
            'description' => 'Aplicaciones web modernas y escalables.',
            'sort_order' => 1,
            'is_active' => true,
        ]);

        Service::create([
            'number' => '02',
            'title' => 'E-commerce',
            'description' => 'Tiendas online enfocadas en vender.',
            'sort_order' => 2,
            'is_active' => true,
        ]);

        Service::create([
            'number' => '03',
            'title' => 'Software',
            'description' => 'Sistemas personalizados para tu negocio.',
            'sort_order' => 3,
            'is_active' => true,
        ]);
    }
}
