<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" href="{{asset('public/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/client/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('public/owlcarousel/css/owl.carousel.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/owlcarousel/css/owl.theme.default.min.css')}}">
	<script src="{{asset('public/js/jquery-3.3.1.min.js')}}"></script>
	<script src="{{asset('public/owlcarousel/js/owl.carousel.min.js')}}"></script>
	<script src="{{asset('public/js/bootstrap.min.js')}}"></script>
			
</head>
<body class="preloading">
	{{-- Bengin header --}}
	@include('client.blocks.header')
	{{-- End header --}}

	{{-- menu-category-mobile --}}
	@include('client.blocks.menu-mobile')
	{{-- end menu category mobile --}}

	
	@yield('content-client')
	@include('client.blocks.quick-view-product')
	@include('client.blocks.preload')
	@include('client.blocks.login')
	@include('client.blocks.footer')
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
	<script src="http://localhost:7000/Affilate/public/js/createcookie.js"></script>
	@yield('script')
	<script src="{{asset('public/client/js/action.js')}}"></script>
	
</body>
</html>