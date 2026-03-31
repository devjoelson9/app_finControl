<?php

namespace Tests\Feature\Auth;

use Illuminate\Foundation\Testing\LazilyRefreshDatabase;
use Livewire\Volt\Volt;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use LazilyRefreshDatabase;

    public function test_registration_screen_can_be_rendered(): void
    {
        $response = $this->get('/register');

        $response
            ->assertOk()
            ->assertSeeVolt('pages.auth.register');
    }

    public function test_new_users_can_register(): void
    {
        $component = Volt::test('pages.auth.register')
            ->set('name', 'Test User')
            ->set('email', 'test@example.com')
            ->set('password', 'password')
            ->set('password_confirmation', 'password');

        $component->call('register');

        $component->assertRedirect(route('dashboard', absolute: false));

        $this->assertAuthenticated();
    }

    public function test_registration_requires_valid_data(): void
    {
        $component = Volt::test('pages.auth.register')
            ->set('email', 'not-an-email')
            ->set('password', 'password')
            ->set('password_confirmation', 'mismatch');

        $component->call('register');

        $component->assertHasErrors([
            'name' => 'required',
            'email' => 'email',
            'password' => 'confirmed',
        ]);
    }
}
