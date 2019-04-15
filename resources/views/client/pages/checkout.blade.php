@extends('client.master')
@section('content-client')
	<div class="container">
		<div class="row">
			<div class="checkout-left">
				<h1 class="checkout-title"><span>Thanh toán <i class="glyphicon glyphicon-lock"></i></span></h1>
				<div class="checkout_step">
					<div class="step_one">
						<h3 class="step_title step_title_active">
								<span class="step_title_left">1</span>
								<span class="step_title_txt">Đăng nhập</span>
						</h3>
						<div class="step_one_login">
							<div class="col-md-5">
								<h3>Đăng nhập bằng tài khoản đã tạo</h3>
								<form action="">
									<div class="form-group">
									    <label for="Username">Username:</label>
									    <input type="text" class="form-control" name="username">
									</div>
									<div class="form-group">
									    <label for="Password">Password:</label>
									    <input type="password" class="form-control" name="password">
									</div>
									  <button type="submit" class="btn btn-primary">Dang nhap</button>
								</form>
							</div>
							<div class="col-md-5">
								<h3>Dành cho khách hàng chưa có tài khoản</h3>
								<ul class="list-group list-unstyled">
									<li class="checkout-method-item">
										<input class="checkout_method_radio"  type="radio" id="checkout_type_register" name="checkout_type" checked="checked">
										<label for="checkout_type">
											<span class="checkout_type_title">Đăng ký</span>
											<span class="checkout_type_hint">Tạo tài khoản mới để mua hàng và thanh toán</span>
										</label>
									</li>
									<li class="checkout-method-item">
										<input class="checkout_method_radio" type="radio" id="checkout_type_guest" name="checkout_type">
										<label for="checkout_type">
											<span class="checkout_type_title">Thanh toán không cần tài khoản</span>
											<span class="checkout_type_hint">Tạo tài khoản mới để mua hàng và thanh toán</span>
										</label>
									</li>
								</ul>
								<div class="checkout_button">
									<a class="btn btn-primary" id="register" >Đăng ký</a>		
								</div>
								<div class="cm_noscript">
									<a class="btn btn-primary" id="checkout_guest">Thanh toán không cần tài khoản</a>
								</div>
							</div>
						</div>
						<div class="step_one_register">
							<form action="" method="POST">
								<input type="hidden" name="_token" value={{csrf_token()}}>
								<h3>Đăng ký tài khoản mới</h3>
								<div class="form-group">
							    	<label for="Username">Username:</label>
							    	<input type="text" class="form-control" name="username">
							  	</div>
								<div class="form-group">
								    <label for="email">email:</label>
								    <input type="email" class="form-control" name="email"> 
								</div>
								<div class="form-group">
									<label for="password">password:</label>
									<input type="password" class="form-control" name="password">
								</div>
								<div class="form-group">
									<label for="Repasswrod">Password again:</label>
									<input type="password" class="form-control" name="Repasswrod">
								</div>
								 <button type="submit" class="btn btn-primary">Dang ky</button>
							</form>
						</div>
					</div>
					<div class="step_two">
						<h3 class="step_title">
								<span class="step_title_left">2</span>
								<span class="step_title_txt">Địa chỉ</span>
						</h3>
						<div class="info_user">
							<form action="">
								<div class="form-group">
								    <label for="name">Họ và Tên:</label>
								    <input type="text" class="form-control" name="name">
								</div>
								<div class="form-group">
								    <label for="email">Email:</label>
								    <input type="password" class="form-control" name="email">
								</div>
								<div class="form-group">
								    <label for="phone">Điện thoại:</label>
								    <input type="text" class="form-control" name="phone">
								</div>
								<div class="form-group">
								    <label for="address">Địa chỉ:</label>
								    <input type="text" class="form-control" name="address">
								</div>
								  <button type="submit" class="btn btn-primary">Đặt hàng</button>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop