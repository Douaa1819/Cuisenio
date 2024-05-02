<?php

namespace Tests\Feature;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Hash;
use Tests\TestCase;

class CustomAuthControllerTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_registers_a_user()
    {
        $response = $this->post('/register', [
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => 'Password123@',
        ]);

        $response->assertRedirect(route('user.index'))
            ->assertSessionHas('success', 'You have registered successfully');
        $this->assertAuthenticated();
    }


    public function it_requires_name_email_and_password_for_registration()
    {
        $response = $this->post('/register', []);

        $response->assertSessionHasErrors(['name', 'email', 'password']);
    }

    public function it_logs_in_a_user()
    {
        $user = User::factory()->create([
            'email' => 'john@example.com',
            'password' => Hash::make('Password123@'),
        ]);

        $response = $this->post('/login', [
            'email' => 'john@example.com',
            'password' => 'Password123@',
        ]);

        $response->assertRedirect('/home');
        $this->assertAuthenticatedAs($user);
    }


    public function it_requires_email_and_password_for_login()
    {
        $response = $this->post('/login', []);

        $response->assertSessionHasErrors(['email', 'password']);
    }
}
