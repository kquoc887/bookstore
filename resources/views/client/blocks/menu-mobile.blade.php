<div class="menu-mobile">
	<nav class="navbar navbar-default" role="navigation">
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#menu-category-mobile">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand"><span class="brand">Danh mục</span></a>
			</div>
	
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse navbar-ex1-collapse" id="menu-category-mobile">
				<ul class="nav navbar-nav navbar-right">
					<?php $cate_parent = DB::table('categories')->where('parent_id',0)->get(); ?>
					@foreach ($cate_parent as $parent)
					<li>
						<a href="#">
						<b class="glyphicon glyphicon-star"></b>
						<span class=title-category>{{$parent->name}}</span><b class="glyphicon glyphicon-plus pull-right plus"></b></a>
						<ul class="list-group list-unstyled item-moblie">
							<?php $cate_child = DB::table('categories')->where('parent_id', '=', $parent->id)->get(); ?>
							<li class="item-menu-level1">
								<b class="glyphicon glyphicon-star"></b>
								Danh Mục
								<b class="glyphicon glyphicon-plus pull-right plus-item"></b>
								<ul class="item-menu-sub list-unstyled">
									@foreach ($cate_child as $child)
									<li class="item-menu-level2"><b class="glyphicon glyphicon-star"></b><a href="{{route('client.book_category', $child->id)}}">{{$child->name}}</a></li>
									@endforeach
								</ul>
							</li>
						</ul>
					</li>
					@endforeach
				</ul>
			</div><!-- /.navbar-collapse -->
		</div>
	</nav>
</div>