<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\car;


class updateCarYearTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testUpdateCarYear()
    {
        $car = car::find(1);
        $car->year = '2000';
        $this->assertTrue($car->save());
    }
}
