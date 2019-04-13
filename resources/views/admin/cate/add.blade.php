@extends('admin.master')
@section('panel-header', 'Add Category')
@section('content')
		@include('admin.blocks.errors')
		<form class="form_style" action="{!! route('admin.cate.getAdd') !!}" method="POST">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}">
			<div class="form-group">
		    	<label for="cate_parent">Category Parent:</label>
		    	<select class="form-control" name="cate_parent">
		    		<option value="0" selected="checked">Please Choose Category</option>
		    		<?php createOptions($parent); ?>
		    	</select>
		  	</div>
		  	<div class="form-group">
		    	<label  for="cate_name">Category Name:</label>
		    	<input type="text" class="form-control" name="txtCateName" placeholder="Please Enter Category Name">
		  	</div>
		  	<button type="submit" class="btn btn-default">Submit</button>
		</form>
@stop