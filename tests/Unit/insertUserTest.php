<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class insertUserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user= new User();
        $user->name = 'Shriyash s Mahajan';
        $user->email = 's@gmail.com';
        $user->password = '123456';
        $this->assertTrue($user->save());

    }
}
