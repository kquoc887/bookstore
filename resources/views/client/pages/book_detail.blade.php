@extends('client.master')
@section('content-client')
	@include('client.blocks.slidebar')

	<div class="container">
		<div class="row">
			<div class="col-md-8 text-center">
				<h3 class="book-detail-name ">{{$book_detail->name}}</h3>
				<img class="book-detal-img" src="{{asset('public/admin/upload/images-book/' . $book_detail->image)}}" alt="image-book-detail">
			</div>
			<div class="col-md-4 book_buy text-center">
				<div class="book_price">
					<span>{{number_format($book_detail->price, 0, ",", ".")}}</span>
					&nbsp;
					<span>VNĐ</span>
				</div>
				<div class="book-detail-quanty">
					<label>Nhà cung cấp:</label>
					<span>Bookstore Star</span>
					<div class="changer">
						<label for="quantity-ajax">Số lượng</label>
						<div class="qty">
							<a class="qty_increase">+</a>
							<input type="text" size="5" class="qty_value" name="qty_product" value="1">
							<a class="qty_reduce">-</a>
						</div>
					</div>
					<div class="action">
							<a class="btn btn-primary" href="">Thêm vào giỏ hàng</a>
							<a class="btn btn-link" href="">Mua nhanh</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="container">
		<h2 class="detail-title">Chi tiết sản phẩm</h2>
		<div class="table-responsive">
			<table class="table-condensed book-detail-info">
				<tr>
					<th colspan="2">Thông tin chi tiết</th>
				</tr>
				<tr>
					<td>Nhà xuất bản:</td>
					<td>{{$book_detail->publishing_company}}</td>
				</tr>
				<tr>
					<td>Tác giả:</td>
					<td>{{$book_detail->author}}</td>
				</tr>
				<tr>
					<td>Trọng lượng:</td>
					<td>{{$book_detail->weight}}</td>
				</tr>
				<tr>
					<td>Kích thước:</td>
					<td>{{$book_detail->size}}</td>
				</tr>
				<tr>
					<td>Số trang:</td>
					<td>{{$book_detail->pages}}</td>
				</tr>
				<tr>
					<td>Năm xuất bản:</td>
					<td>{{$book_detail->publishing_year}}</td>
				</tr>
			</table>
		</div>
		<div class="book-detail-des">
			<h3 class="book-detail-name">{{$book_detail->name}}</h3>
			{!!$book_detail->description!!}
		</div>
	</div>

	<div class="container">
		<div class="row">
			<div class="col-md-6">
				<div class="book-same">
					<h2 class="detail-title">Sản phẩm tương tự</h2>
					<ul class="list-group list-unstyled list-book-same">
						@foreach ($book_same as $bs)
							<li class="bs-item"><a href="#"><img class="" src="{{asset('public/admin/upload/images-book/' . $bs->image)}}" alt="img-book-sam">{{$bs->name}}</a></li> 
						@endforeach
					</ul>
				</div>
			</div>
		</div>
	</div>
@stop