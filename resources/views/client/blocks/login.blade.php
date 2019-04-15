<div class="dialog-login">
	<div class="dialog-login-titlebar">
		<span class="dialog-login-title">Đăng nhập</span>
		<button class="pull-right" id="dialog_close">
			<span class="glyphicon glyphicon-remove"></span>
		</button>
	</div>
	<div class="dialog-login-block">
		<div class="login-popup container ">
			<form action="{{route('client.login')}}" method="POST" name="client-login">
				<input type="hidden" name="_token" value="{{csrf_token()}}">
				<div class="form-group">
					<label for="Username">Username:</label>
					<input class="form-control" type="text" name="username">
				
				</div>
				<div class="form-group">
					<label for="Password">Password:</label>
					<input class="form-control" type="password" name="password">

				</div>
				<a class="btn btn-link link_register" href="{{route('client.getRegister')}}">
						Đăng ký tài khoản mới
					</a>
				<a class="btn btn-primary" id="btn-login">Đăng nhập</a>
			</form>
		</div>
	</div>
</div>