<?php

namespace Tests\Unit;

use App\Models\Car;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;

class CarPersistTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic unit test example.
     */
    public function test_a_car_can_be_persisted(): void
    {
        $car = new Car(['model' => 'Ferrari', 'year' => 2018, 'is_sold' => true]);

        $this->assertCount(0, Car::all());

        $car->save();

        $this->assertCount(1, Car::all());
    }

    public function test_a_car_can_be_generated_with_a_factory(): void
    {
        $car = Car::factory()->create();

        $this->assertCount(1, Car::all());
    }
}