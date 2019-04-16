@extends('admin.master')
@section('panel-header', 'Add Product')
@section('content')
		@include('admin.blocks.errors')
		<form class="form_style" action="{!! route('admin.book.postAdd') !!}" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}">
			<div class="form-group">
		    	<label for="cate_parent">Category Book:</label>
		    	<select class="form-control" name="category">
		    		<option value="" selected="checked">Please Choose Category</option>
		    		<?php createOptions($category); ?>
		    	</select>
		  	</div>
		  	<div class="form-group">
		    	<label for="cate_parent">Supplier:</label>
		    	<select class="form-control" name="supplier">
		    		<option value="" selected="checked">Please Choose Category</option>
		    		<?php createOptions($supplier); ?>
		    	</select>
		  	</div>
		  	<div class="form-group">
		    	<label  for="product_name">Book Name:</label>
		    	<input type="text" class="form-control"  name="txtBookName" placeholder="Please Enter Book Name">
		  	</div>
		  	<div class="form-group">
		    	<label  for="product_name">Publishing Company:</label>
		    	<input type="text" class="form-control"  name="txtPubCompany" placeholder="Please Enter Publishing Company">
		  	</div>
		  	 <div class="form-group">
		    	<label  for="product_name">Weight:</label>
		    	<input type="text" class="form-control"  name="txtWeight" placeholder="Please Enter Weight">
		  	</div>
		  	 <div class="form-group">
		    	<label  for="product_name">Size:</label>
		    	<input type="text" class="form-control"  name="txtSize" placeholder="Please Enter Size">
		  	</div>
		  	<div class="form-group">
		    	<label  for="product_name">Author:</label>
		    	<input type="text" class="form-control"  name="txtAuthor" placeholder="Please Enter Author">
		  	</div>
			<div class="form-group">
		    	<label  for="product_name">Number Of Page:</label>
		    	<input type="text" class="form-control"  name="txtPages" placeholder="Please Enter Number Of Page">
		  	</div>
		  	<div class="form-group">
		    	<label  for="product_images">Images:</label>
		    	<input type="file" class="form-control" name="fImage">
		  	</div>
		  	<div class="form-group">
		    	<label  for="product_price">Price:</label>
		    	<input type="text" class="form-control" name="txtPrice" placeholder="Please Enter Price Of Book">
		  	</div>
		  	<div class="form-group">
		    	<label  for="product_price">Publishing Year:</label>
		    	<input type="text" class="form-control" name="txtPubYear" placeholder="Please Enter Publishing Year">
		  	</div>
		  	<div class="form-group">
		    	<label  for="product_description">Description Of Book:</label>
		    	<textarea class="form-control" id="editor3" rows="5" name="txtDescription"></textarea>
		    	{{-- <script type="text/javascript">CKEDITOR.replace('editor3');</script> --}}
		  	</div>
		  	<button type="submit" class="btn btn-default">Product Add</button>
		  	<button type="reset" class="btn btn-default">Reset</button>
		</form>
@stop