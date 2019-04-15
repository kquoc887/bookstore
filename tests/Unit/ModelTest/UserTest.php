<?php

namespace Tests\Unit\ModelTest;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class UserTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreateUser()
    {
        $user = factory(\App\User::class)->create();
        $this->assertDatabaseHas('users', ['username' => $user->username]);
    }

    public function testUpdateUser()
    {
    	$faker = \Faker\Factory::create();
    	$user = factory(\App\User::class)->create();
    	$result = $user->update([
    		'email' => $faker->unique()->email
    	]);
    	$this->assertTrue($result);
    }

     public function testDeleteUser() {
     	$user = factory(\App\User::class)->create();
     	$result = $user->delete();
     	$this->assertTrue($result);
     }
}
