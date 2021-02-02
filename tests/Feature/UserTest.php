<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_example()
    {
        $response = $this->get('/');

        $response->assertStatus(200);
    }

    /** @test */
    // public function add_a_user()
    // {
    //     $userData = [
    //         'name' => 'Pinky Linn',
    //         'email' => 'linn@hello.com',
    //         'password' => 'secret',
    //         'password_confirmation' => 'secret',
    //         'created_at' => \Carbon\Carbon::now()
    //     ];

    //     $response = $this->json('POST', 'api/register', $userData, ['Accept' => 'application/json']);
    //     $response = assertStatus(201);
    //     $response = assertJson([
    //         'status' => true,
    //         'message' => 'User successfully created', 
    //         $userData]);
    // }
}
