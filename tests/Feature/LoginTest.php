<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
// use Illuminate\Foundation\Testing\TestCase;

class LoginTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
         $this->visit('/admin/login')
         ->type('admin1', 'txtUsername')
          ->type(12345, 'txtPassword')
         ->press('Login')
         ->seePageIs('admin/cate/list');
    }
}
