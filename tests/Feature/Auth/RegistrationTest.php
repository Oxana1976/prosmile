<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;
    //Vérifie que la page d'enregistrement est accessible
    public function test_registration_screen_can_be_rendered(): void
    {
        $response = $this->get('/register');

        $response->assertStatus(200);
    }
    //Vérifie que l'utilisateur est authentifié après l'enregistrement.
    //Vérifie que la réponse redirige vers le tableau de bord de l'utilisateur.
    public function test_new_users_can_register(): void
    {
        $response = $this->post('/register', [
            'firstname' => 'John',
            'lastname' => 'Doe',
            'email' => 'test@example.com',
            'language' => 'fr',
            'password' => 'password',
            'password_confirmation' => 'password',
        ]);

        $this->assertAuthenticated();
        $response->assertRedirect(route('user.dashboard', absolute: false));
    }
}
