<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Car;

class CarModelTest extends TestCase
{

    public function testCarModel()
    {
        $car = Car::find(5);
        $car_model = (string) $car->Model;
        $this->assertInternalType('string', $car_model);
    }
}
