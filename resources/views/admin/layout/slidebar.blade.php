<ul class="list-group">
	<li class="list-group-item item-parent">
		<p class="item-parent-title">Supplier<span class="glyphicon glyphicon-menu-down pull-right"></span></p>
		<ul class="list-unstyled list-group item-child">
			<li><a href="{!! route('admin.supplier.list') !!}" class="btn btn-link">List Supplier</a></li>
			<li><a href="{!! route('admin.supplier.getAdd') !!}" class="btn btn-link">Add Supplier</a></li>
		</ul>
	</li>
	<li class="list-group-item item-parent">
		<p class="item-parent-title">Category<span class="glyphicon glyphicon-menu-down pull-right"></span></p>
		<ul class="list-unstyled list-group item-child">
			<li><a href="{!! route('admin.cate.list') !!}" class="btn btn-link">List Category</a></li>
			<li><a href="{!! route('admin.cate.getAdd') !!}" class="btn btn-link">Add Category</a></li>
		</ul>
	</li>
	<li class="list-group-item item-parent">
		<p class="item-parent-title">Book<span class="glyphicon glyphicon-menu-down pull-right"></span></p>
		<ul class="list-unstyled list-group item-child">
			<li><a href="{!! route('admin.book.list') !!}" class="btn btn-link">List Book</a></li>
			<li><a href="{!! route('admin.book.getAdd') !!}" class="btn btn-link">Add Book</a></li>
		</ul>
	</li>
	<li class="list-group-item item-parent	">
		<p class="item-parent-title">User<span class="glyphicon glyphicon-menu-down pull-right"></span></p>
		<ul class="list-unstyled list-group item-child">
			<li><a href="{!! route('admin.user.list') !!}" class="btn btn-link">List User</a></li>
			<li><a href="{!! route('admin.user.getAdd') !!}" class="btn btn-link">Add User</a></li>
		</ul>
	</li>
	<li class="list-group-item item-parent	">
		<p class="item-parent-title">Order Detail<span class="glyphicon glyphicon-menu-down pull-right"></span></p>
		<ul class="list-unstyled list-group item-child">
			<li><a href="{!! route('admin.order.list') !!}" class="btn btn-link">List Order Detail</a></li>
			
		</ul>
	</li>
</ul>