<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class featureTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRegisterPageStatus()
    {
        $response = $this->get('/register');
        $response->assertStatus(200);
    }
    public function testloginPageStatus()
    {
        $response = $this->get('/login');
        $response->assertStatus(200);
    }
}
