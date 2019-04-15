<div class="row">
	<h2 class="title">Sản phẩm nổi bật</h2>
	<div class="hidden-xs hidden-sm col-md-2 col-lg-2 ">
		<img class="img-responsive" src="{{asset('public/client/images/banner/banner1.jpg')}}" alt="">
	</div>
	<div class="col-xs-12 col-sm-12 col-md-10 col-lg-10 ">
		<div class="row-inside">
			@foreach ($book_outstanding as $item)
			<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 ">
				<div class="one_product">
					<div class="pro-action">
						<a class="cart-add" href="">+Thêm vào giỏ<i class="glyphicon glyphicon-shopping-cart"></i></a>
					</div>
					<img class="img-responsive" src="{{asset('public/admin/upload/images-book/' . $item->image)}}" alt="image1">
					<div class="pro-detail">
						<h3 class="pro-name">
							<a href="">{{$item->name}}</a>
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