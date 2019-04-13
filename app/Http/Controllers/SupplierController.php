<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\supplier;
use App\Http\Requests\SupplierRequest;

class SupplierController extends Controller
{
    public function getList() {
    	$data = supplier::all();
    	return view('admin.supplier.list', compact('data'));

    }

    public function getAdd() {
    	return view('admin.supplier.add');
    }

    public function postAdd(SupplierRequest $request) {
        $supplier       = new supplier;
        $supplier->name = $request->txtSupplierName;
    	$supplier->save();
    	return redirect()->route('admin.supplier.list')->with(['flash_level' => 'success','flash_message' => 'Success !! Complete Add Supplier']);
    }

    public function getDelete($id) {
        $supplier = supplier::find($id);
        $supplier->delete($id);
        return redirect()->route('admin.supplier.list')->with(['flash_level' => 'success','flash_message' => 'Success !! Complete Delete Supplier']);
    }

    public function getEdit($id) {
        $data   = supplier::find($id);
        return view('admin.supplier.edit', compact('data'));
    }

    public function postEdit(SupplierRequest $request, $id) {
        $supplier            = supplier::find($id);
        $supplier->name      = $request->txtSupplierName;
        $supplier->save();
        return redirect()->route('admin.supplier.list')->with(['flash_level' => 'success','flash_message' => 'Success !! Complete Eidt Category']);
    }
}
