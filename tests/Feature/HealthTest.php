<?php

namespace Tests\Feature;

use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     */
    public function test_the_health_endpoint_returns_a_successful_response(): void
    {
        $response = $this->get('/health');

        $response->assertStatus(200);
    }
}
