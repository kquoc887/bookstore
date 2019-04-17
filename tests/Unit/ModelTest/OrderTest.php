<?php

namespace Tests\Unit\ModelTest;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class OrderTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testOrder()
    {
    	$book_name1 = str_random(5);
    	$sup = Factory(\App\supplier::class)->create();
    	$cate = Factory(\App\category::class)->create([
    		'name' => str_random(5)
    	]);
    	$user = Factory(\App\User::class)->create();

    	$book1 = Factory(\App\book::class)->create([
    		'name' => $book_name1,
    		'alias' => changeTitle($book_name1),
    		'weight' => '200g',
    		'size' => '22 x 25 cm',
            'cate_id' => $cate->id,
            'sup_id' => $sup->id
    	]);
    	$book_name2 = str_random(5);
    	$book2 = $book1 = Factory(\App\book::class)->create([
    		'name' => $book_name2,
    		'alias' => changeTitle($book_name2),
    		'weight' => '200g',
    		'size' => '22 x 25 cm',
            'cate_id' => $cate->id,
            'sup_id' => $sup->id
    	]);

    	$books = array($book1, $book2);

    	$order = Factory(\App\order::class)->create([
    		'quantity' => count($books),
    		'total' => $book1->price * $book2->price,
    		'user_id' => $user->id,
    	]);

    	
    	foreach ($books as $key => $book) {
    		$order_detail = Factory(\App\oderdetail::class)->create([
    			'bookName' => $book->name,
    			'quantity' => 1,
    			'price' => $book->price,
    			'book_id' => $book->id,
    			'order_id' => $order->id,
    		]);
    	}
    	$this->assertDatabaseHas('orders', ['id' => $order->id]);
    }
}
