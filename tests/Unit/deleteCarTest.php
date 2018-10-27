<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\car;

class deleteCarTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $car= new car();
        $car->make = 'Honda';
        $car->model = 'Newly Added';
        $car->year = '2013';
        $car->save();
        $this->assertTrue($car->delete());
    }
}
