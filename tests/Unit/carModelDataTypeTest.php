<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\car;

class carModelDataTypeTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCarModelDataType()
    {
        $car = car::inRandomOrder()->first();
        $model = $car->Model;
        $this->assertInternalType("string", $model);
    }
}
