<?php

namespace Tests\Unit\ModelTest;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\book;

class BookTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testCreateBook()
    {
    	$book_name = 'Hoa Vang Tren Co Xanh';
    	$sup = Factory(\App\supplier::class)->create();
    	$cate = Factory(\App\category::class)->create([
    		'name' => str_random(5)
    	]);

    	$book = Factory(\App\book::class)->create([
    		'name' => $book_name,
    		'alias' => changeTitle($book_name),
    		'weight' => '200g',
    		'size' => '22 x 25 cm',
            'cate_id' => $cate->id,
            'sup_id' => $sup->id
    	]);
        $this->assertDatabaseHas('books', ['name' => $book->name]);
    }

     public function testUpdateBook() {

        $book_name = str_random(5);
        $sup = Factory(\App\supplier::class)->create();
        $cate = Factory(\App\category::class)->create([
            'name' => str_random(5)
        ]);
        $book = Factory(\App\book::class)->create([
            'name' => $book_name,
            'alias' => changeTitle($book_name),
            'weight' => '200g',
            'size' => '22 x 25 cm',
            'cate_id' => $cate->id,
            'sup_id' => $sup->id
        ]);
        $result = $book->update([
            'weight' => '300g'
        ]); 
        $this->assertTrue($result);
     }

     public function testDeleteBook() {
         $book_name = str_random(5);
        $sup = Factory(\App\supplier::class)->create();
        $cate = Factory(\App\category::class)->create([
            'name' => str_random(5)
        ]);
        $book = Factory(\App\book::class)->create([
            'name' => $book_name,
            'alias' => changeTitle($book_name),
            'weight' => '200g',
            'size' => '22 x 25 cm',
            'cate_id' => $cate->id,
            'sup_id' => $sup->id
        ]);
        $result = $book->delete();
         $this->assertTrue($result);
     }

    
}
