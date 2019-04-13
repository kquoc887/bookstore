<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Title Page</title>
		<link rel="stylesheet" href="{{asset('public/admin/css/style.css')}}">
		<link rel="stylesheet" href="{{asset('public/admin/css/bootstrap.min.css')}}">
		<script src="{{asset('public/admin/js/jquery-3.3.1.min.js')}}"></script>
		<script src="{{asset('public/admin/js/bootstrap.min.js')}}"></script>
		<script src="{{asset('public/ckeditor/ckeditor.js')}}"></script>
		<script src="{{asset('public/ckfinder/ckfinder.js')}}"></script>
	</head>
	<body>
		@include('admin.layout.header');
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-3 col-xs-5 slidebar">
						@include('admin.layout.slidebar');
				</div>
				<div class="col-md-9 col-xs-7 content">
					<div class="panel panel-primary">
						<div class="panel-heading">
							@yield('panel-header')
						</div>
						<div class="panel-body">
							 @if (Session::has('flash_message'))
							 	<div class="alert alert-{!! Session::get('flash_level') !!}">
							 		{!! Session::get('flash_message') !!}
							 	</div>
							 @endif
							@yield('content')
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="{{asset('public/admin/js/action.js')}}"></script>
		
	</body>
</html>

