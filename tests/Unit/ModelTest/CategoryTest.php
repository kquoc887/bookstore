<?php

namespace Tests\Unit\ModelTest;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class CategoryTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreateCategory()
    {
        $cate = factory(\App\category::class)->create([
        	'name' => str_random(10)
        ]);
        $this->assertDatabaseHas('categories', ['name' => $cate->name]);
    }

    public function testUpdateCategory() 
    {
    	$cate = factory(\App\category::class)->create([
        	'name' => str_random(10)
        ]);
    	 $result = $cate->update([
    	 	'name' => str_random(10)
    	 ]);
    	 $this->assertTrue($result); 
    }

    public function testDeleteCategory()
    {
    	$cate = factory(\App\category::class)->create([
        	'name' => str_random(5)
        ]);
    	 $result = $cate->delete();
    	 $this->assertTrue($result); 
    }
}
