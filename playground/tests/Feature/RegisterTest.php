<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_form_validation(): void
    {
        $data = [
            'name' => fake()->name(),
            'email' => fake()->email(),
            'password' => 'InventiveMedia26!',
            'password_confirmation' => 'InventiveMedia26!'
        ];

        $response = $this->post(route('register'), $data);

        $response->assertInvalid();
    }
}
