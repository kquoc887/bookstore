<?php

namespace Tests\Unit\HttpRequest;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TestHttpRequest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testRequestToPageIndex()
    {
        $response = $this->get('/client');
        $response->assertStatus(200);
    }
}
