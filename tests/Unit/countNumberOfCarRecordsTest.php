<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\car;

class countNumberOfCarRecordsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $car = car::all();
        $carRecordsCount = $car->count();
        $this->assertEquals(51,$carRecordsCount);
    }
}
