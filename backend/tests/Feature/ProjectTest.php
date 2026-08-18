<?php

namespace Tests\Feature;

use App\Models\Project;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ProjectTest extends TestCase
{
    use RefreshDatabase;

    public function test_projects_endpoint_returns_projects(): void
    {
        Project::factory()->create();

        $response = $this->getJson('/api/projects');

        $response
            ->assertStatus(200)
            ->assertJsonStructure([
                '*' => [
                    'id',
                    'number',
                    'title',
                    'category',
                    'description',
                    'image',
                    'technologies',
                    'url',
                    'github_url',
                    'featured',
                    'created_at',
                    'updated_at',
                ],
            ]);
    }
}