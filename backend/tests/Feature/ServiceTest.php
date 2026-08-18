<?php

namespace Tests\Feature;

use App\Models\Service;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ServiceTest extends TestCase
{
    use RefreshDatabase;

    public function test_services_endpoint_returns_services(): void
    {
        Service::factory()->create();

        $response = $this->getJson('/api/services');

        $response
            ->assertStatus(200)
            ->assertJsonStructure([
                '*' => [
                    'id',
                    'number',
                    'title',
                    'description',
                    'is_active',
                    'sort_order',
                    'created_at',
                    'updated_at',
                ],
            ]);
    }
}