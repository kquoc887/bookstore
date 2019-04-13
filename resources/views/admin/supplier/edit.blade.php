@extends('admin.master')
@section('panel-header', 'Edit Category')
@section('content')
		@include('admin.blocks.errors')
		<form class="form_style" action="{{route('admin.supplier.postEdit', $data['id'])}}" method="POST">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}">
			
		  	<div class="form-group">
		    	<label  for="cate_name">Supplier Name:</label>
		    	<input type="text" class="form-control" name="txtSupplierName" placeholder="Please Enter Supplier Name" value="{!! old('txtCateName',isset($data) ? $data['name'] : null) !!}">
		  	</div>
		  	<button type="submit" class="btn btn-default">Submit</button>
		</form>
@stop