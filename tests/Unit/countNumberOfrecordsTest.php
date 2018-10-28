<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;


class countNumberOfrecordsTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCountNumberOfrecords()
    {
        $user = User::all();
        $recordCount = $user->count();
        $this->assertEquals(51, $recordCount);
    }
}
