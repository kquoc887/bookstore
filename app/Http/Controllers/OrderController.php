<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\order;
use DB;
use App\oderdetail;

class OrderController extends Controller
{
	public function getList() {
		$data = oderdetail::all();
		return view('admin.order.list', compact('data'));
	}

    public function viewReport() {
    	$total_order = Db::table('orders')->count();
    	$total_money = DB::table('orders')->sum('total');
    	return view('admin.order', compact('total_order', 'total_money'));
    }
}
