<?php

namespace Tests\Feature;

use App\Models\Technology;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class TechnologyTest extends TestCase
{
    use RefreshDatabase;

    public function test_technologies_endpoint_returns_technologies(): void
    {
        Technology::factory()->create();

        $response = $this->getJson('/api/technologies');

        $response
            ->assertStatus(200)
            ->assertJsonStructure([
                '*' => [
                    'id',
                    'name',
                    'type',
                    'slug',
                    'icon',
                    'sort_order',
                    'is_active',
                    'created_at',
                    'updated_at',
                ],
            ]);
    }
}