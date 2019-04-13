<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('home', function() {
	return view('admin.master');
});

Route::get('login', ['as' => 'admin.getLogin', 'uses' => 'Auth\LoginController@getLogin']);
Route::post('login', ['as' => 'admin.postLogin', 'uses' => 'Auth\LoginController@postLogin']);

Route::get('logout', ['as' => 'admin.getLogout', 'uses' => 'Auth\LoginController@getLogout']);

/*
 * Paths of Page Admin:
 */
Route::group(['prefix'=>'admin','middleware' => 'adminLogin'],function() {
	Route::group(['prefix'=>'cate'],function() {
		Route::get('list', ['as' => 'admin.cate.list','uses' => 'CategoryController@getList']);
		Route::get('add', ['as'	=> 'admin.cate.getAdd','uses' => 'CategoryController@getAdd']);
		Route::post('add', ['as'=> 'admin.cate.postAdd','uses'=> 'CategoryController@postAdd']);
		Route::get('delete/{id}', ['as' => 'admin.cate.getDelete','uses'=> 'CategoryController@getDelete']);
		Route::get('edit/{id}', ['as' => 'admin.cate.getEdit','uses'=> 'CategoryController@getEdit']);
		Route::post('edit/{id}', ['as'=> 'admin.cate.postEdit','uses'=> 'CategoryController@postEdit']);
	});
	
	Route::group(['prefix'=>'supplier'],function() {
		Route::get('list', ['as' => 'admin.supplier.list','uses'=> 'SupplierController@getList']);
		Route::get('add', ['as'	=> 'admin.supplier.getAdd','uses'=> 'SupplierController@getAdd']);
		Route::post('add', ['as'=> 'admin.supplier.postAdd','uses'=> 'SupplierController@postAdd']);
		Route::get('delete/{id}', ['as' => 'admin.supplier.getDelete','uses'=> 'CategoryController@getDelete']);
		Route::get('edit/{id}', ['as' => 'admin.supplier.getEdit','uses'=> 'SupplierController@getEdit']);
		Route::post('edit/{id}', ['as'=> 'admin.supplier.postEdit','uses'=> 'SupplierController@postEdit']);
	});
	
	Route::group(['prefix'=>'book'], function() {
		Route::get('list', ['as' => 'admin.book.list','uses'=> 'BookController@getList']);
		Route::get('add', ['as' => 'admin.book.getAdd', 'uses' => 'BookController@getAdd']);
		Route::post('add', ['as' => 'admin.book.postAdd', 'uses' => 'BookController@postAdd']);
		Route::get('delete/{id}', ['as' => 'admin.book.getDelete','uses'=> 'BookController@getDelete']);
		Route::get('edit/{id}', ['as' => 'admin.book.getEdit','uses'=> 'BookController@getEdit']);
		Route::post('edit/{id}', ['as'=> 'admin.book.postEdit','uses'=> 'BookController@postEdit']);
	});

	Route::group(['prefix'=>'user'], function() {
		Route::get('list', ['as' => 'admin.user.list','uses'=> 'UserController@getList']);
		Route::get('add', ['as' => 'admin.user.getAdd', 'uses' => 'UserController@getAdd']);
		Route::post('add', ['as' => 'admin.user.postAdd', 'uses' => 'UserController@postAdd']);
		Route::get('delete/{id}', ['as' => 'admin.user.getDelete','uses'=> 'UserController@getDelete']);
		Route::get('edit/{id}', ['as' => 'admin.user.getEdit','uses'=> 'UserController@getEdit']);
		Route::post('edit/{id}', ['as'=> 'admin.user.postEdit','uses'=> 'UserController@postEdit']);
	});
});


/*
 * Paths of Page Client:
 */
Route::group(['prefix' => 'client'], function() {
	Route::get('/', ['as' => 'client.home', 'uses' => 'ClientController@home']);
	Route::get('detail/{id}', ['as' => 'client.detail', 'uses' => 'ClientController@getDetail']);
	Route::get('book-cate/{id}', ['as' => 'client.book_category', 'uses' => 'ClientController@getBookCate']);
	
	Route::group(['prefix'=>'ajax'], function() {
		Route::get('quickview', ['as' => 'client.ajax.quickView', 'uses' => 'AjaxController@postQuickView']);

		Route::get('update-Cart/{row_id}/{qty}', ['as' => 'client.ajax.updateCart', 'uses' => 'AjaxController@updateCart']);
		Route::get('getListCart', ['as' => 'client.ajax.getListCart', 'uses' => 'AjaxController@getListCart']);
		Route::get('addCartItem', ['as' => 'client.ajax.addCart', 'uses' => 'AjaxController@addCartItem']);

	});

	Route::group(['prefix'=>'purchase'], function() {
		Route::get('cart', ['as' => 'client.purchase.getCart', 'uses' => 'CartController@getCart']);

		Route::get('buy-product/{id}/{nameproduct}', ['as' => 'client.purchase.buyProduct', 'uses' => 'CartController@buyProduct']);

		Route::get('delete-cart-id/{row_id}', ['as' => 'client.purchase.deleteItem', 'uses' => 'CartController@deleteItem']);
	});
});

Route::get('about', function() {
	return 'about';
});