<nav class="navbar navbar-default" role="navigation">
	<div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="#">Admin Area - Project Tester</a>
		</div>
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown">
					@if (Auth::check())
					<a href="#" class="dropdown-toggle" data-toggle="dropdown">
						<b class="glyphicon glyphicon-user">&nbsp</b>
							{{Auth::user()->username}}
						<b class="caret"></b>
					</a>
					<ul class="dropdown-menu">
						<li><a href="#">Edit<b class="	glyphicon glyphicon-edit pull-right"></b></a></li>
						<li><a href="{{route('admin.getLogout')}}">Logout<b class="glyphicon glyphicon-log-out pull-right"></b></a></li>
					</ul>
					@endif
				</li>
			</ul>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>