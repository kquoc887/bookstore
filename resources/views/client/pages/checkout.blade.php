@extends('client.master')
@section('content-client')
	<div class="container">
		<div class="row">
			<div class="col-md-9">
				<div class="checkout-left">
					<h1 class="checkout-title"><span>Thanh toán <i class="glyphicon glyphicon-lock"></i></span></h1>
					<div class="checkout_step">
						<div class="step_one">
							@if (Auth::check())
								<h3 class="step_title">
									<span class="step_title_left glyphicon glyphicon-ok"></span>
									<span class="step_title_txt">Đăng nhập bằng: {{Auth::user()->username}}</span>
								</h3> 
							@else
								<h3 class="step_title step_title_active">
										<span class="step_title_left">1</span>
										<span class="step_title_txt">Đăng nhập</span>
								</h3>
								<div class="step_one_login">
									<div class="col-md-5">
										<h3>Đăng nhập bằng tài khoản đã tạo</h3>
										<form action="{{route('client.purchase.loginCheckout')}}" method="POST">
											<input type="hidden" name="_token" value="{{csrf_token()}}">
											<div class="form-group">
											    <label for="Username">Username:</label>
											    <input type="text" class="form-control" name="username_checkout">
											</div>
											<div class="form-group">
											    <label for="Password">Password:</label>
											    <input type="password" class="form-control" name="password_checkout">
											</div>
											  <button type="submit" class="btn btn-primary">Đăng nhập</button>
										</form>
									</div>
									<div class="col-md-5">
										<h3>Dành cho khách hàng chưa có tài khoản</h3>
										<ul class="list-group list-unstyled">
											<li class="checkout-method-item">
												<input class="checkout_method_radio"  type="radio" id="checkout_type_register" name="checkout_type" >
												<label for="checkout_type">
													<span class="checkout_type_title">Đăng ký</span>
													<span class="checkout_type_hint">Tạo tài khoản mới để mua hàng và thanh toán</span>
												</label>
											</li>
											
										</ul>
										<div class="checkout_button">
											<a class="btn btn-primary" id="register" >Đăng ký</a>		
										</div>
									</div>
								</div>
							@endif
							<div class="step_one_register">
								<form action="{{route('client.purchase.registerCheckout')}}" method="POST">
									<input type="hidden" name="_token" value={{csrf_token()}}>
									<h3>Đăng ký tài khoản mới</h3>
									<div class="form-group">
								    	<label for="Username">Username:</label>
								    	<input type="text" class="form-control" name="username_res">
								  	</div>
									<div class="form-group">
									    <label for="email">email:</label>
									    <input type="email" class="form-control" name="email_res"> 
									</div>
									<div class="form-group">
										<label for="password">password:</label>
										<input type="password" class="form-control" name="password_res">
									</div>
									<div class="form-group">
										<label for="Repasswrod">Password again:</label>
										<input type="password" class="form-control" name="Repassword_res">
									</div>
									 <button type="submit" class="btn btn-primary">Đăng ký</button>
								</form>
							</div>
						</div>
						<div class="@if(!Auth::check()) step_two @else step_two_active @endif">
							<h3 class="@if(Auth::check()) step_title step_title_active @else step_title @endif">
									<span class="step_title_left">2</span>
									<span class="step_title_txt">Địa chỉ</span>
							</h3>
							<div class="@if (Auth::check()) info_user info_user_active @else info_user @endif">
								<form action="{{route('client.email.order')}}" method="POST">
									<input type="hidden" name="_token" value="{{csrf_token()}}">
									<div class="form-group">
									    <label for="name">Họ và Tên:</label>
									    <input type="text" class="form-control" name="name">
									</div>
									<div class="form-group">
									    <label for="email">Email:</label>
									    <input type="email" class="form-control" name="email" value="@if(Auth::check()) {{Auth::user()->email}} @else {{ '' }} @endif">
									</div>
									<div class="form-group">
									    <label for="phone">Điện thoại:</label>
									    <input type="text" class="form-control" name="phone">
									</div>
									<div class="form-group">
									    <label for="address">Địa chỉ:</label>
									    <input type="text" class="form-control" name="address">
									</div>
									<input type="hidden" name="user_id" value="@if(Auth::check()) {{Auth::user()->id}} @else {{''}} @endif">
									  <button type="submit" class="btn btn-primary" id="take_an_order">Đặt hàng</button>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-md-3">
				<h1 class="checkout_title">Tổng đơn hàng</h1>
				<div class="table-responsive">
					<table class="table table-condensed">
						<tr>
							<td>{{$content->count()}} sản phẩm</td>
							<td><?php echo Cart::subtotal(0,'.','.') . 'VNĐ'; ?></td>
						</tr>
					</table>
				</div>
				<h3>Sản phẩm thanh toán</h3>
				<div class="table-responsive">
					<table class="table table-condensed">
					@foreach($content as $row)
					<tr>
						<td>
							{{$row->name}}
						</td>
						<td>{{$row->qty . ' x '. number_format($row->price,0, ',', '.') . 'VNĐ'}}</td>
					</tr>
					@endforeach
					</table>
				</div>
			</div>
		</div>
	</div>
@stop