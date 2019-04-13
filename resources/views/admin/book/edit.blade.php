@extends('admin.master')
@section('panel-header', 'Edit Product')
@section('content')
		@include('admin.blocks.errors')
		<form class="form_style" action="{!! route('admin.book.postEdit', $data->id) !!}" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}">
			<div class="form-group">
		    	<label for="cate_parent">Category Book:</label>
		    	<select class="form-control" name="category">
		    		<option value="" selected="checked">Please Choose Category</option>
		    		<?php createOptions($category, $data->cate_id); ?>
		    	</select>
		  	</div>
		  	<div class="form-group">
		    	<label for="cate_parent">Supplier:</label>
		    	<select class="form-control" name="supplier">
		    		<option value="" selected="checked">Please Choose Category</option>
		    		<?php createOptions($supplier, $data->sup_id); ?>
		    	</select>
		  	</div>
		  	<div class="form-group">
		    	<label  for="product_name">Book Name:</label>
		    	<input type="text" class="form-control"  name="txtBookName" placeholder="Please Enter Book Name" value="{{ old('txtBookName', isset($data) ? $data->name : null) }}">
		  	</div>
		  	<div class="form-group">
		    	<label  for="product_name">Publishing Company:</label>
		    	<input type="text" class="form-control"  name="txtPubCompany" placeholder="Please Enter Publishing Company" value="{{ old('txtBookName', isset($data) ? $data->publishing_company : null) }}">
		  	</div>
		  	 <div class="form-group">
		    	<label  for="product_name">Weight:</label>
		    	<input type="text" class="form-control"  name="txtWeight" placeholder="Please Enter Weight" value="{{ old('txtBookName', isset($data) ? $data->weight : null) }}">
		  	</div>
		  	 <div class="form-group">
		    	<label  for="product_name">Size:</label>
		    	<input type="text" class="form-control"  name="txtSize" placeholder="Please Enter Size" value="{{ old('txtBookName', isset($data) ? $data->size : null) }}">
		  	</div>
		  	<div class="form-group">
		    	<label  for="product_name">Author:</label>
		    	<input type="text" class="form-control"  name="txtAuthor" placeholder="Please Enter Author" value="{{ old('txtBookName', isset($data) ? $data->author : null) }}">
		  	</div>
			<div class="form-group">
		    	<label  for="product_name">Number Of Page:</label>
		    	<input type="text" class="form-control"  name="txtPages" placeholder="Please Enter Number Of Page" value="{{ old('txtBookName', isset($data) ? $data->pages : null) }}">
		  	</div>
		  	<div class="form-group">
		  		<label  for="image_current">Images:</label>
		    	<img src="{{ asset('public/admin/upload/images-book/' . $data->image) }}">
		  	</div>
		  	<div class="form-group">
		    	<label  for="product_images">Images:</label>
		    	<input type="file" class="form-control" name="fImage">
		  	</div>
		  	<div class="form-group">
		    	<label  for="product_price">Price:</label>
		    	<input type="text" class="form-control" name="txtPrice" placeholder="Please Enter Price Of Book" value="{{ old('txtBookName', isset($data) ? $data->price : null) }}">
		  	</div>
		  	<div class="form-group">
		    	<label  for="product_price">Publishing Year:</label>
		    	<input type="text" class="form-control" name="txtPubYear" placeholder="Please Enter Publishing Year" value="{{ old('txtBookName', isset($data) ? $data->publishing_year : null) }}">
		  	</div>
		  	<div class="form-group">
		    	<label  for="product_description">Description Of Book:</label>
		    	<textarea class="form-control" id="editor3" rows="5" name="txtDescription">{{ old('txtBookName', isset($data) ? $data->description : null) }}</textarea>
		    	<script type="text/javascript">CKEDITOR.replace('editor3');</script>
		  	</div>
		  	<button type="submit" class="btn btn-default">Edit</button>
		  	<button type="reset" class="btn btn-default">Reset</button>
		</form>
@stop