@extends('client.master')
@section('content-client')
<div class="container">
	@if(count($errors) > 0)
		<div class="alert alert-danger">
			<ul>
				@foreach($errors->all() as $error)
					<li>{!! $error !!}</li>
				@endforeach
			</ul>
		</div>
	@endif
	@if (Session::has('flash_message'))
	 	<div class="alert alert-{!! Session::get('flash_level') !!}">
	 		{!! Session::get('flash_message') !!}
	 	</div>
	@endif
	<form action="{{route('client.postRegister')}}" class="frm-register" method="POST">
		<h3>Đăng ký tài khoản mới</h3>
		<input type="hidden" name="_token" value="{{csrf_token()}}">
		<div class="form-group">
			<label for="Username">Username:</label>
			<input class="form-control" type="text" name="username_res">
		</div>
		<div class="form-group">
			<label for="Email">Email:</label>
			<input class="form-control" type="email" name="email_res">
		</div>
		<div class="form-group">
			<label for="Password">Password:</label>
			<input class="form-control" type="password" name="password_res">
		</div>
		<div class="form-group">
			<label for="RePasswrod">RePasswrod:</label>
			<input class="form-control" type="password" name="repassword">
		</div>
		  <button type="submit" class="btn btn-primary">Đăng ký</button>
	</form>
</div>
@stop