<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart,DB;
use App\book;
use App\category;
use App\supplier;

class CartController extends Controller
{
	public function getCart() {
		$books = book::all();
    	$content = Cart::content();
    	return view('client.pages.shopping', compact('books','content'));
	}

    public function buyProduct($id) {
    	$book_buy = DB::table('books')->where('id', $id)->first();
    	Cart::add(array('id' => $id, 'name' => $book_buy->name, 'qty' => 1, 'price' => $book_buy->price, 'options' => array('img' => $book_buy->image)));
    	$content = Cart::content();
    	return redirect()->route('client.purchase.getCart');
    }

    public function deleteItem($row_id) {
    	Cart::remove($row_id);
    	return redirect()->route('client.purchase.getCart');
    }

    public function getCheckout() {
        $content = Cart::content();
        return view('client.pages.checkout', compact('content'));
    }
    
}
