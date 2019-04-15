<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Mail;
use App\order;
use App\oderdetail;
use Cart,Auth;

class EmailController extends Controller
{
	var $email;
	var $username;
    public function postOrder(Request $request) {
    	
		date_default_timezone_set('Asia/Ho_Chi_Minh');
    	$date = date('Y/m/d');
    	$this->username = Auth::user()->username;
    	$this->email = $request->email;
    	$total = 0;
    	foreach (Cart::content() as $row) {
    		$total += $row->qty * $row->price;
    	}
    	echo $total;
    	$data = array(
    		'name' => $request->name,
    		'phone' => $request->phone,
    		'address' => $request->address,
    		'content' => Cart::content()
    	);

    	$order = new order();
    	$order->date = $date;
    	$order->quantity = Cart::content()->count();
    	$order->total = $total;
    	$order->user_id = $request->user_id;
    	$order->save();

    	foreach (Cart::content() as $row) {
    		$order_tail = new oderdetail();
    		$order_tail->date = $date;
    		$order_tail->bookName = $row->name;
    		$order_tail->quantity = $row->qty;
    		$order_tail->price = $row->price;
    		$order_tail->book_id = $row->id;
    		$order_tail->order_id = $order->id;
    		$order_tail->save();
    	}

    	Cart::destroy();
    	Mail::send('emails.blank', $data, function($message) {
    		$message->from('project.bookstore2019@gmail.com', 'BookStore');
    		$message->to($this->email,$this->username)->subject('Thư thông báo đặt sách!');
    	});

    	return redirect()->route('client.home');
    }
}
