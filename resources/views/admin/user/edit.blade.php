@extends('admin.master')
@section('panel-header', 'Edit Add')
@section('content')
		@include('admin.blocks.errors')
		<form class="form_style" action="{!! route('admin.user.postEdit', $user->id) !!}" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}">
		  	<div class="form-group">
		    	<label  for="product_name">Username:</label>
		    	<input type="text" class="form-control"  name="txtUsername" placeholder="Please Enter Username" value="{{ old('txtUsername', isset($user) ? $user->username : null) }}" disabled>
		  	</div>
		  	<div class="form-group">
		    	<label  for="product_name">Password:</label>
		    	<input type="password" class="form-control"  name="txtPassword" placeholder="Please Enter Password">
		  	</div>
		  	 <div class="form-group">
		    	<label  for="product_name">RePassword:</label>
		    	<input type="password" class="form-control"  name="txtRePassword" placeholder="Please Enter Password ">
		  	</div>
		  	 <div class="form-group">
		    	<label  for="product_name">Email:</label>
		    	<input type="email" class="form-control"  name="txtEmail" placeholder="Please Enter Email"  value="{{ old('txtEmail', isset($user) ? $user->email : null) }}">
		  	</div>
		  	@if (Auth::user()->id != $user->id)
		  	<div class="form-group">
		    	<label  for="cate_name">User Level:</label>
		    	<label class="radio-inline"><input type="radio" name="rdoLevel" value="1" 
					@if ($user->level == 1)
						checked="checked" 
					@endif
		    	>Admin</label>
		    	<label class="radio-inline"><input type="radio" name="rdoLevel" value="2" 
					@if ($user->level == 2)
						checked="checked" 
					@endif
		    	>Member</label>
		  	</div>
		  	@endif
		  	<button type="submit" class="btn btn-default">Add</button>
		  	<button type="reset" class="btn btn-default">Reset</button>
		</form>
@stop