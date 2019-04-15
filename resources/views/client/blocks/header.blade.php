<nav class="navbar navbar-default" role="navigation">
	<div class="container">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">
				<img src="{{asset('public/client/images/banner/logo.png')}}" alt="logo">
			</a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li><a class="btn btn-link" href="{{route('client.home')}}">Trang chủ</a></li>
				<li><a class="btn btn-link" href="{{route('client.product_all')}}">Sản phẩm</a></li>
				<li><a class="btn btn-link" href="{{route('client.introduce')}}">Giới thiệu</a></li>
				@if (Auth::check())
					<li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<b class="glyphicon glyphicon-user">&nbsp</b>
							{{Auth::user()->username}}
						<b class="caret"></b>
					</a>
						<ul class="dropdown-menu">
							<li>
								<a href="{{route('client.logout')}}">Logout<b class="glyphicon glyphicon-log-out pull-right"></b></a>
							</li>
						</ul>
					</li>
				@else
					<li><a class="btn btn-link" href="{{route('client.getRegister')}}">Đăng ký</a></li>
					<li><a class="btn btn-link" id="login">Đăng nhập</a></li>
				@endif
				<li>
					<a class="cart btn btn-link">
						<p><b class="glyphicon glyphicon-shopping-cart"></b>Giỏ hàng: <?php echo Cart::content()->count() . 'sản phẩm'; ?></p>
					</a>
					@if (Cart::content()->count() >0)
						<ul class="list-group list-unstyled cart-info">
						</ul>
					@endif
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>