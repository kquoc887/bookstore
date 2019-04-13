@extends('admin.master')
@section('panel-header', 'User Add')
@section('content')
		@include('admin.blocks.errors')
		<form class="form_style" action="{!! route('admin.user.postAdd') !!}" method="POST" enctype="multipart/form-data">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}">
		  	<div class="form-group">
		    	<label  for="username">Username:</label>
		    	<input type="text" class="form-control"  name="txtUsername" placeholder="Please Enter Username" value="{{ old('txtUsername') }}">
		  	</div>
		  	<div class="form-group">
		    	<label  for="password">Password:</label>
		    	<input type="password" class="form-control"  name="txtPassword" placeholder="Please Enter Password">
		  	</div>
		  	 <div class="form-group">
		    	<label  for="rePassword">RePassword:</label>
		    	<input type="password" class="form-control"  name="txtRePassword" placeholder="Please Enter Password ">
		  	</div>
		  	 <div class="form-group">
		    	<label  for="email">Email:</label>
		    	<input type="email" class="form-control"  name="txtEmail" placeholder="Please Enter Email"  value="{{ old('txtEmail') }}">
		  	</div>
		  	<div class="form-group">
		    	<label  for="user_level">User Level:</label>
		    	<label class="radio-inline"><input type="radio" name="rdoLevel" value="1" checked>Admin</label>
		    	<label class="radio-inline"><input type="radio" name="rdoLevel" value="2" >Member</label>
		  	</div>
		  	<button type="submit" class="btn btn-default">Add</button>
		  	<button type="reset" class="btn btn-default">Reset</button>
		</form>
@stop