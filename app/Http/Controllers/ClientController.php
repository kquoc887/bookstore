<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\book;
use App\supplier;
use App\User;
use App\oderdetail;
use Hash;
use Illuminate\Support\Facades\Auth;
use Validator;
class ClientController extends Controller
{
    public function home() {
        $oderdetail = oderdetail::all();
        $book = book::all();
        $book_outstanding = array();
        foreach ($oderdetail as $key => $od) {
            foreach ($book as $key => $b) {
                if ($b->id == $od->book_id) {
                   $book_outstanding[] = $b;
                }
            }
        }
    	$books = book::all();
    	$books_new = book::select('id', 'name', 'price', 'image', 'description', 'alias')->orderBy('id', 'DESC')->get();
    	return view('client.pages.home', compact('books','books_new', 'book_outstanding'));
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
        $rules = [
            'username_res' => 'required|min:3',
            'password_res'  => 'required|min:6',
            'email_res'    => 'required|email|unique:users,email',
        ];
        $message = [
            'username_res.required' => 'Vui lòng nhập username',
            'username_res.min' => 'Username có tối thiểu 3 ký tự',
            'password_res.required' => 'Vui lòng nhập password',
            'password_res.min' => 'Password có tối thiểu 6 ký tự',
            'email_res.required'    => 'Vui lòng nhập email',
            'email_res.email'    => 'Email chưa nhập đúng định dạng',     
            'email_res.unique'  => 'Email đã tồn tại'               
        ];
        $validator = Validator::make($request->all(), $rules, $message);
        if ($validator->fails())  {
            return redirect()->route('client.getRegister')->withErrors($validator)->withInput($request->all());
        }
        $user = new User();
        $user->username = $request->username_res;
        $user->email = $request->email_res;
        $user->password = Hash::make($request->password_res);
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
        return redirect()->back();
    }

    public function getProductAll() {
        $book = book::all();
        return view ('client.pages.product_all', compact('book'));
    }
    
}
