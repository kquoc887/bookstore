@extends('client.master')
@section('content-client')
<div class="container ">
	<div class="table-responsive">
		<h2>Thông tin giỏ hàng</h2>
		<table class="table table-bordered">
		    <tr>
	       		<th>Image</th>
	           	<th>Product</th>
	           	<th>Qty</th>
	           	<th>Price</th>
	           	<th>Total</th>
				<th>Action</th>
		    </tr>
		   		@foreach ($content as $item)
		       		<tr>
		       			<td>
		       				<img class="img-responsive" src="{{asset('public/admin/upload/images-book/' . $item->options['img'])}}" alt="image-book">
		       			</td>
		           		<td>
		               		{{$item->name}}
		           		</td>
		           		<td>
		           			<div class="changer">
								<div class="qty">
									<a class="qty_increase">+</a>
									<input type="text" size="5" class="qty_value" name="qty_product[40]" value="{{$item->qty}}">
									<a class="qty_reduce">-</a>
								</div>	
							</div>
		           		</td>
		           		<td>
		           			{{number_format($item->price, '0' , ',', '.')}}
		           		</td>
		           		<td>
		           			{{number_format($item->price * $item->qty, '0' , ',', '.')}}
		           		</td>
		           		<td>
		           			<a href="{{route('client.purchase.deleteItem', $item->rowId)}}"><span class="glyphicon glyphicon-trash"></span></a>
		           			<a class="updateCart" id="{{$item->rowId}}"><span class="glyphicon glyphicon-refresh"></span></a>
		           		</td>
		  
		       		</tr>

			   	@endforeach
			</form>
		</table>
	</div>
</div>

<div class="container">
	<div class="table-responsive pull-right">
		<table class="table table-striped table-bordered">
			<tr>
				<td>Total</td>
				<td>
					<?php 
						echo Cart::subtotal(0,'.','.');
					?>			
				</td>
				<td>
					<a class="btn btn-primary" href="{{route('client.purchase.checkout')}}">Thanh toán</a>
				</td>
			</tr>
		</table>
	</div>
</div>

@stop