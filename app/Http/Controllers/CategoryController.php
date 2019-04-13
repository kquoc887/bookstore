<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryRequest;
use App\category;

class CategoryController extends Controller
{
    public function getList() {
    	$data = category::all();
    	return view('admin.cate.list', compact('data'));
    }

    public function getAdd() {
    	$parent = category::all();
    	return view('admin.cate.add', compact('parent'));
    }

    public function postAdd(CategoryRequest $request) {
		$category            = new category;
		$category->name      = $request->txtCateName;
		$category->parent_id = $request->cate_parent;
		$category->save();
		return redirect()->route('admin.cate.list')->with(['flash_level' => 'success','flash_message' => 'Success !! Complete Add Category']);
    }

    public function getDelete($id) {
    	$parent = Category::where('parent_id', $id)->count();
    	if ($parent == 0) {
    		$category = Category::find($id);
	    	$category->delete($id);
	    	return redirect()->route('admin.cate.list')->with(['flash_level' => 'success', 'flash_message' => 'Success !! Complete Delete Category']);
    	} else {
    		echo "<script type='text/javascript'>
    				alert('Sory! You Can Not Delete This Category');
    				window.location = '";
    				echo route('admin.cate.list');
    				echo "' </script>";
    	}
    }

    public function getEdit($id) {
		$data   = category::find($id);
		$parent =category::all();
    	return view('admin.cate.edit', compact('data','parent'));
    }

    public function postEdit(CategoryRequest $request, $id) {
		$category            = category::find($id);
		$category->name      = $request->txtCateName;
		$category->parent_id = $request->cate_parent;
		$category->save();
		return redirect()->route('admin.cate.list')->with(['flash_level' => 'success','flash_message' => 'Success !! Complete Eidt Category']);
    }
}
