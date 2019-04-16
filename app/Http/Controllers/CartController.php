<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Cart,DB,Hash;
use App\book;
use App\category;
use App\supplier;
use App\User;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
	public function getCart() {
		$books = book::all();
    	$content = Cart::content();
    	return view('client.pages.shopping', compact('books','content'));
	}

    public function postResgisterCheckout(Request $request) {
        $user = new User();
        $user->username = $request->username_res;
        $user->email = $request->email_res;
        $user->password = Hash::make($request->password_res);
        $user->level = 0;
        $user->remember_token = $request->_token;
        $user->save();
        return redirect()->route('client.home');
    }

    public function postLoginCheckout(Request $request) {
        // echo 123;
         $data = array(
            'username' => $request->username_checkout,
            'password' => $request->password_checkout
        );
        if (Auth::attempt($data)) {
            return redirect()->back();
        } else {
            return redirect()->back()->with(['flash_level' => 'error','flash_message' => 'Đăng nhập thất bại']);
        }
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
