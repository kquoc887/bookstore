<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="{{asset('public/admin/css/bootstrap.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/admin/css/style.css')}}">
</head>
<body>
	<div class="container">
		<form action="" id="frmLogin" method="POST">
			<input type="hidden" name="_token" value="{!! csrf_token() !!}">
			<div class="container">
				<div class="row">
					<div class="col-md-5 col-md-offset-3">
						<div class="panel panel-default">
							<div class="panel-heading">Please Sign In</div>
							<div class="panel-body">
								@include('admin.blocks.errors')
								<div class="imgcontainer">
									<img class="img-circle img-responsive" src="{{asset('public/admin/upload/avatar.jpg')}}" alt="Avatar">
								</div>
								<div class="form-group">
							    	<label  for="username">Username:</label>
							    	<input type="text" class="form-control"  name="txtUsername" placeholder="Please Enter Book Name">
				  				</div>
						  		<div class="form-group">
							    	<label  for="password">Password:</label>
							    	<input type="password" class="form-control"  name="txtPassword" placeholder="Please Enter Book Name">
						  		</div>
				  				<button type="submit" id="login"> Login</button>
							</div>
						</div>
					</div>
				</div>
			</div>
		</form>
	</div>
</body>
</html>