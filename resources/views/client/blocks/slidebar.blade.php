<div class="container sliderbar-moblie">
	<div class="row">
		<div class="col-x2-12">
			<ul class="list-group list-unstyled menu-page-detail">\
				<?php $category_parent = DB::table('categories')->where('parent_id', 0)->get(); ?>
				@foreach ($category_parent as $parent)
					<li class="list-group-item menu-detail-item">
						<a >{{$parent->name}}</a>
						<ul class="list-group list-unstyled menu-child">
							<?php
								$menu_child = DB::table('categories')->where('parent_id', $parent->id)->get();
							 ?>
							@foreach ($menu_child as $child)
							<li><a href="{{route('client.book_category', $child->id)}}">{{$child->name}}</a></li>
							@endforeach
						</ul>
					</li>
				@endforeach	
			</ul>
		</div>
	</div>
</div>