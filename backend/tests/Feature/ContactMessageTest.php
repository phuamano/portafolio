<?php

namespace Tests\Feature;

use App\Models\ContactMessage;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ContactMessageTest extends TestCase
{
    use RefreshDatabase;

    public function test_contact_message_can_be_created(): void
    {
        $data = [
            'name' => 'Paul',
            'email' => 'paul@example.com',
            'message' => 'Necesito desarrollar una aplicación web.',
        ];

        $response = $this->postJson('/api/contact', $data);

        $response
            ->assertStatus(201)
            ->assertJson([
                'message' => 'Mensaje enviado correctamente.',
            ]);

        $this->assertDatabaseHas('contact_messages', [
            'name' => 'Paul',
            'email' => 'paul@example.com',
            'message' => 'Necesito desarrollar una aplicación web.',
        ]);
    }

    public function test_contact_message_requires_valid_data(): void
    {
        $response = $this->postJson('/api/contact', []);

        $response
            ->assertStatus(422)
            ->assertJsonValidationErrors([
                'name',
                'email',
                'message',
            ]);

        $this->assertDatabaseCount('contact_messages', 0);
    }
}