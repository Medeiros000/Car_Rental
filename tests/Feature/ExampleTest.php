<?php

namespace Tests\Feature;

// use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class ExampleTest extends TestCase
{
  /**
   * A basic test example.
   */
  public function test_the_application_returns_a_successful_response(): void
  {
    $response = $this->get('/');

    $response->assertStatus(200);
  }

  /**
   * A basic test example.
   */
  public function test_the_application_returns_a_successful_response_for_login(): void
  {
    $response = $this->post('api/login', [
      'email' => 'jr@carrental.test',
      'password' => '123456',
    ]);
    $response->assertStatus(200);
  }
}
