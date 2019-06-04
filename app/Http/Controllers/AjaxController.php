<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\book;
use App\category;
use Cart;
use App\User;
// use Illuminate\Support\Facades\Request;

class AjaxController extends Controller
{
    public function postQuickView(Request $request) {
    	$id = $request->post('id');
    	$book = book::find($id);
    	echo json_encode($book);
    }

    public function getListCart() {
    	$content = Cart::content();
    	$arr = array();
    	foreach ($content as $item) {
    		$arr[] = $item;
    	}
    	echo json_encode($arr);
    }

    public function updateCart(Request $request) {
    	if($request->ajax()) {
    		$row_id = $request->get('row_id');
    		$qty = $request->get('quantity');
    		Cart::update($row_id,$qty);
    		echo 'oke';
    	}
    }


    public function addCartItem(Request $request) {
    	if ($request->ajax()) {
    		$id = $request->get('id');
    		$book_add = book::find($id);
    		Cart::add(array('id' => $id, 'name' => $book_add->name, 'qty' => $request->qty, 'price' => $book_add->price, 'options' => array('img' => $book_add->image)));
    		$count = Cart::content()->count();
    		$array = array('status' => 'success', 'count' => $count);
    		echo json_encode($array);
    	}
    }

    public function login(Request $request) {
        $user_all = User::all();
        $arr_username = array();
        foreach ($user_all as $key => $value) {
            $arr_username[] = $value->username;
        }
        $errors = array();
        $result = false;
        if ($request->ajax()) {
            if($request->get('us') == '') {
                $errors['username'] = 'Vui lòng nhập username';
            } else {
                $result = in_array($request->get('us'), $arr_username);
                if ($result == false) {
                    $errors['username'] = 'Username không tồn tại!';
                    $errors['password'] = '';
                    echo json_encode($errors);
                    die();
                } else {
                    $errors['username'] = '';
                }
            }

            if ($request->get('pass') == '') {
                $errors['password'] = 'Vui lòng nhập password';
            } else {
                $errors['password'] = '';
            }
        }
        echo json_encode($errors);
    }

    public function getAjaxBook(Request $request) {
        $book_arr = array();

        if ($request->ajax()) {
            $book_all = book::all();
            $cate_id = $request->get("cate_id");
            $cate_child = category::where('parent_id', $cate_id)->get();
            foreach ($cate_child as $key => $cate) {
                foreach ($book_all as $key => $b) {
                    if ($b->cate_id == $cate->id) {
                            $book_arr[] = $b;
                        }    
                }
            }
            echo json_encode($book_arr);
        }
    }
}
