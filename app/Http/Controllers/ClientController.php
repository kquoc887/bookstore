<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\book;
use App\supplier;
use App\User;
use Hash;
use Illuminate\Support\Facades\Auth;

class ClientController extends Controller
{
    public function home() {
    	$books = book::all();
    	$books_new = book::select('id', 'name', 'price', 'image', 'description', 'alias')->orderBy('id', 'DESC')->get();
    	return view('client.pages.home', compact('books','books_new'));
    }

    public function getIntroduce() {
        return view('client.pages.introduce');
    }

    public function getCart() {
		return view('client.pages.shopping');
	}

    public function buyProduct($id) {
    	$book_buy = DB::table('books')->where('id', $id)->first();
    	Cart::add(array('id' => $id, 'name' => $book_buy->name, 'qty' => 1, 'price' => $book_buy->price, 'options' => array('img' => $book_buy->image)));
    	$content = Cart::content();
    }

    public function getDetail($id) {
       
        $book_detail = book::find($id);
        $book_same = book::where('cate_id', $book_detail->cate_id)->where('id','<>', $book_detail->id)->get();
       
        return view('client.pages.book_detail', compact('book_detail', 'book_same'));
    }

    public function getBookCate($id) {
        
        $book_cate = book::where('cate_id', $id)->get();
        return view('client.pages.book_category', compact('book_cate'));
    }

    public function getResgister() {
        return view('client.pages.register');
    }

    public function postResgister(Request $request) {
        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->level = 0;
        $user->remember_token = $request->_token;
        $user->save();
        return redirect()->route('client.getRegister')->with(['flash_level' => 'success','flash_message' => 'Đăng ký tài khoản thành công']);
    }

    public function postLogin(Request $request) {
        $data = array(
            'username' => $request->username,
            'password' => $request->password
        );
        if (Auth::attempt($data)) {
            return redirect()->route('client.home');
        } else {
            return redirect()->back()->with(['flash_level' => 'error','flash_message' => 'Đăng nhập thất bại']);
        }
    }

    public function getLogout() {
        Auth::logout();
        return redirect()->route('client.home');
    }

    public function getProductAll() {
        $book = book::all();
        return view ('client.pages.product_all', compact('book'));
    }
    
}
