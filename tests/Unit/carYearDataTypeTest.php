<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\car;

class carYearDataTypeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarYearDataType()
    {
        $car = car::inRandomOrder()->first();
        $year = (int)$car->Year;
        $this->assertInternalType("int", $year);
    }
}
