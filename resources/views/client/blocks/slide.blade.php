<div class="slide-carousel">
	<div id="carousel-id" class="carousel slide" data-ride="carousel">
		<ol class="carousel-indicators">
			<li data-target="#carousel-id" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-id" data-slide-to="1" class=""></li>
			<li data-target="#carousel-id" data-slide-to="2" class=""></li>
		</ol>
		<div class="carousel-inner">
			<div class="item active">
				<img class="img-responsive" src="{{asset('public/client/images/slide/slide1.jpg')}}" alt="">
			</div>
			<div class="item">
				<img class="img-responsive" src="{{asset('public/client/images/slide/slide2.jpg')}}" alt="First slide">
				
			</div>
			<div class="item">
				<img class="img-responsive" src="{{asset('public/client/images/slide/slide3.jpg')}}" alt="Third Slide">
			</div>
		</div>
		<a class="left carousel-control" href="#carousel-id" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
		<a class="right carousel-control" href="#carousel-id" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
		<div class="menuCategory">
			<ul class="list-group list-unstyled list-category">
				<?php 
					$categories = DB::table('categories')->select('id','name')->get();
				 ?>
				@foreach ($categories as $item)
					<li>
						{!! $item->name !!}
						<b class="glyphicon glyphicon-chevron-right pull-right"></b>
						<div class="box-up">
							<div class="row-menu">
								<p class="itemMenu">
									Danh mục
								</p>	
								<div class="item_subMenu">
									<ul class="list-group list-unstyled">
										{{-- array_unique( $array ) --}}
										<?php $category_child = DB::table('categories')->select('id', 'name')->where('parent_id', '=', $item->id)->get(); ?>
										
										@foreach ($category_child as $child)
											<li>
												<a href="{{route('client.book_category', $child->id)}}">
													<span>{{$child->name}}</span>
												</a>
											</li>
										@endforeach
									</ul>
								</div>
							</div>
							<div class="row-menu">
								<p class="itemMenu">
									Nhà cung cấp
								</p>	
								<div class="item_subMenu">
									<?php $sup = array(); ?>
									<ul class="list-group list-unstyled">
										@foreach ($category_child as $c) 
											@foreach ($books as $b)
												@if($c->id == $b->cate_id)	
													<?php $sup[$b->supplier->id] = $b->supplier->name; ?>	
												@endif
											@endforeach
										@endforeach
										<?php $sup = array_unique($sup); ?>
										@foreach ($sup as $key => $s)
											<li>
												<a href="{{$key}}">
													<span>{{$s}}</span>
												</a>
											</li>
										@endforeach
									</ul>
								</div>
							</div>
						</div>
					</li>
				@endforeach
			</ul>
		</div>
	</div>
</div>