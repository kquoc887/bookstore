<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\BookRequest;
use App\category;
use App\supplier;
use App\book;
use File;
class BookController extends Controller
{

	public function getList() {
		$data = book::all();
		return view('admin.book.list', compact('data'));
	}

    public function getAdd() {
    	$category = category::all();
    	$supplier =	supplier::all();
    	return view('admin.book.add', compact('category', 'supplier'));
    }

    public function postAdd(BookRequest $request) {
		$image                    = $request->file('fImage');
		$fileName                 = $image->getClientOriginalName();
		$book                     = new book();
		$book->name               = $request->txtBookName;
		$book->alias              = changeTitle($request->txtBookName);
		$book->publishing_company = $request->txtPubCompany;
		$book->weight             = $request->txtWeight;
		$book->size               = $request->txtSize;
		$book->author             = $request->txtAuthor;
		$book->pages              = $request->txtPages;
		$book->price              = $request->txtPrice;
		$book->publishing_year    = $request->txtPubYear;
		$book->description        = $request->txtDescription;
		$book->cate_id            = $request->category;
		$book->sup_id             = $request->supplier;
		$book->image              = $image->getClientOriginalName();
		$image->move('public/admin/upload/images-book/', $fileName);
		$book->save();
		return redirect()->route('admin.book.list')->with(['flash_level' => 'success','flash_message' => 'Success !! Complete Add Book']);
    }

    public function getDelete($id) {
    	$book = book::find($id);
    	File::delete('public/admin/upload/images-book'. $book->image);
    	$book->delete($id);
    	return redirect()->route('admin.book.list')->with(['flash_level' => 'success','flash_message' => 'Success !! Complete Delete Book']);
    }

    public function getEdit($id) {
    	$category = category::all();
    	$supplier = supplier::all();
    	$data = book::find($id);
    	return view('admin.book.edit', compact('category', 'supplier', 'data'));

    }

    public function postEdit(Request $request, $id) {
    	$validate = $request->validate(
				[ 
					'category'       => 'required',
					'supplier'       => 'required',
					'txtBookName'    => 'required',
					'txtPubCompany'  => 'required',
					'txtWeight'      => 'required',
					'txtSize'        => 'required',
					'txtAuthor'      => 'required',
					'txtPages'       => 'required|numeric',
					'fImage'         => 'image',
					'txtPrice'       => 'required|numeric',
					'txtPubYear'     => 'required',
					'txtDescription' => 'required',
				],
				[
					'category.required'       => 'Please Choose Category For Book',
					'supplier.required'       => 'Please Choose Supplier For Book',
					'txtBookName.required'    => 'Please Enter Name Of Book',
					'txtPubCompany.required'  => 'Please Enter Publishing Name',
					'txtWeight.required'      => 'Please Enter Weight Of Book',
					'txtSize.required'        => 'Please Enter Size of Book',
					'txtAuthor.required'      => 'Please Enter Author Of Book',
					'txtPages.required'       => 'Please Enter Page of Book',
					'txtPages.numeric'        => 'Please Enter Number For Page of Book',
					'txtPrice.required'       => 'Please Enter Price of Book',
					'txtPrice.numeric'        => 'Please Enter Number For Price of Book',
					'txtPubYear.required'     => 'Please Enter Publishing Year of Book',
					'txtPubYear.numeric'      => 'Please Enter Number For Publishing Year of Book',
					'txtDescription.required' => 'Please Enter Description Of Book',
    			]
    	);
		$book        = book::find($id);
		$img_current = 'public/admin/upload/images-book/' . $book->image;
		$book->name               = $request->txtBookName;
		$book->alias              = changeTitle($request->txtBookName);
		$book->publishing_company = $request->txtPubCompany;
		$book->weight             = $request->txtWeight;
		$book->size               = $request->txtSize;
		$book->author             = $request->txtAuthor;
		$book->pages              = $request->txtPages;
		$book->price              = $request->txtPrice;
		$book->publishing_year    = $request->txtPubYear;
		$book->description        = $request->txtDescription;
		$book->cate_id            = $request->category;
		$book->sup_id             = $request->supplier;
    	if (!empty($request->file('fImage'))) {
			$image       = $request->file('fImage');
			$fileName    = $image->getClientOriginalName();
			$book->image = $fileName;
    		$image->move('public/admin/upload/images-book/', $fileName);
    		if (File::exists($img_current)) {
    			File::delete($img_current);
    		}
    	}
    	$book->save();
		return redirect()->route('admin.book.list')->with(['flash_level' => 'success','flash_message' => 'Success !! Complete Add Book']);
    }
}
