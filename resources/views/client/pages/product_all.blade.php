@extends('client.master')
@section('content-client')
	<div class="product-all">
		<div class="container">
			<div class="row">
				<div class="col-md-3">
					<div class="list-group dmuc_left">
						<div class="left-title">Danh Mục</div>
						<div class="list_dmuc">
							<?php
								$dmuc = DB::table('categories')->where('parent_id','==', 0)->get();
							 ?>
							 @foreach ( $dmuc as $item)
							<p>
								<input type="radio" name="category" value="{{$item->id}}"> {{$item->name}}
							</p>
							@endforeach
						</div>
					</div>
				</div>
				<div class="col-md-9">
					<div class="dmuc_right">
						@foreach ($book as $item)
						<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 ">
							<div class="one_product">
								<div class="pro-action">
									<a class="cart-add" href="">+Thêm vào giỏ<i class="glyphicon glyphicon-shopping-cart"></i></a>
								</div>
								<img class="img-responsive" src="{{asset('public/admin/upload/images-book/' . $item->image)}}" alt="image1">
								<div class="pro-detail">
									<h3 class="pro-name">
										<a href="{{route('client.detail', $item->id)}}">{{$item->name}}</a>
									</h3>
									<div class="pro-price">
										<p><span>{{$item->price}}</span></p>
									<input type="hidden" class="book-id" value="{{$item->id}}">
									<button class="btn btn-primary watch-fast" >Xem nhanh</button>
									</div>
								</div>
							</div>
						</div>
						@endforeach
					</div>
				</div>
			</div>
		</div>		
	</div>
	
@stop