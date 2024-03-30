<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CarApiTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_cars_api_route_works(): void
    {
        $response = $this->get('/api/cars');

        $response->assertStatus(200);
        $response->assertJsonIsArray();
    }
}