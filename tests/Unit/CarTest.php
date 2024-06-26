<?php

namespace Tests\Unit;

use App\Models\Car;
use PHPUnit\Framework\TestCase;
use TypeError;

class CarTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function test_year_of_the_car_is_not_empty(): void
    {
        $car = new Car(['model' => 'Gol', 'year' => 2020, 'is_sold' => false]);

        if ($car->year === null) {
            throw new TypeError('The year of the car cannot be empty');
        }
        $this->assertNotEmpty($car->year);
    }

    public function test_a_car_can_be_registered_without_a_year(): void
    {
        $car = new Car(['model' => 'Ram', 'is_sold' => false]);

        $this->assertInstanceOf(Car::class, $car);
    }

    public function test_car_is_a_object(): void
    {
        $car = new Car(['model' => 'Ferrari', 'year' => 2018, 'is_sold' => true]);

        $this->assertIsObject($car);
    }
}