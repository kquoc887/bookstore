<div class="container-fluid">
	<h2 class="title">Sản phẩm</h2>
	<div id="owl-product" class="owl-carousel owl-theme">
		@foreach ($books as $item)
			<div class="item">
				<div class="one_product">
					<div class="pro-action">
						<a class="cart-add">+Thêm vào giỏ<i class="glyphicon glyphicon-shopping-cart"></i></a>
					</div>
					<img src="{{asset('public/admin/upload/images-book/' . $item->image)}}" alt="image1">
					<div class="pro-detail">
						<h3 class="pro-name">
							<a href="{{route('client.detail', $item->id)}}">{!! $item->name !!}</a>
						</h3>
						<div class="pro-price">
							<p><span>{!! $item->price !!}</span><span>đ</span></p>
						</div>
						<input type="hidden" class="book-id" value="{{$item->id}}">
						<button class="btn btn-primary watch-fast" >Xem nhanh</button>
					</div>
				</div>
			</div>
		@endforeach
	</div>
</div>