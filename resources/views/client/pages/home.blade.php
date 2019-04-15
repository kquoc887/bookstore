@extends('client.master')
@section('content-client')
	
	{{-- Begin slide --}}
	@include('client.blocks.slide')
	{{-- End slide --}}

	{{-- Begin slide product --}}
	@include('client.blocks.slide-product')
	{{-- End slide product --}}

	<div class="container-fluid past_outstanding">
		{{-- Begin product outstanding --}}	
		@include('client.blocks.product-outstanding')
		{{-- End product outstanding --}}

		{{-- Begin product new --}}
		@include('client.blocks.product-new')
		{{-- End product new --}}
	</div>
	
	
@stop