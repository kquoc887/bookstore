<?php

namespace Tests\Unit\ModelTest;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;


class SupplierTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
     public function testCreateSupplier()
    {
    	$sup = factory(\App\supplier::class)->create();
        $this->assertDatabaseHas('suppliers', ['name' => $sup->name]);
    }

    public function testUpdateSupplier() 
    {
    	$faker = \Faker\Factory::create();
    	$sup = factory(\App\supplier::class)->create();
    	$result = $sup->update([
    		'name' => $faker->unique()->company,
    	]);
    	$this->assertTrue($result);
    }

     public function testDeleteSupplier()
     {

     	$sup = factory(\App\supplier::class)->create();
     	$result = $sup->delete();
     	$this->assertTrue($result);
     }
}
