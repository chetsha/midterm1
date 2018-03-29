<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarMakeTest extends TestCase
{

    public function testCarMake()
    {
        $car = Car::find(5);
        $car_make=$car->Make;
        $this->assertContains($car_make, ['Ford', 'Honda', 'Toyota']);
    }

}

