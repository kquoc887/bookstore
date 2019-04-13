$(document).ready(function() {
	var item = $('.owl-carousel div.item');
	$('#owl-product').owlCarousel({
		loop:true,
		margin:10,
		nav:true,
		autoplay:true,
    	autoplayTimeout:3000,
		responsive:{
			0:{
			    items:2
			},
			600:{
			    items:3
			},
			1000:{
			    items:5
			}
		}
	});

	$('#owl-product-new').owlCarousel({
		margin:10,
		nav:true,
		responsive:{
			0:{
			    items:2
			},
			600:{
			    items:3
			},
			1000:{
			    items:5
			}
		}
	});

	$('.one_product').hover(function() {
		$(this).find('a.cart-add').css('display', 'block');
		$(this).find('.watch-fast').css('opacity', '1');
	}, function() {
		$(this).find('a.cart-add').css('display', 'none');
		$(this).find('.watch-fast').css('opacity', '0');
	});

	$("a.cart").hover(function() {
		$.ajax({
			url:'client/ajax/getListCart',
			type: 'get',
			cache:false,
			dataType:'json',
			success: function(data, status) {
				$('ul.cart-info').children().remove();
				for (var i = 0; i < data.length; i++) {
					var path = "http://localhost/project_bookstore/public/admin/upload/images-book/" + data[i].options['img'];
					$('ul.cart-info').append('<li class="cart-item"><img class="img-cart" src="'+path +'"><p>'+data[i].name+'</p><p>'+data[i].qty+' x '+data[i].price+' VNĐ</p></li>');
				}
				$('ul.cart-info').append('<li class="cart-item"><a href="http://localhost/project_bookstore/client/purchase/cart" class="btn btn-primary">Xem giỏ hàng</a</li>')

				
			},
			complete: function(jqXHR, textStatus) {
				$('ul.cart-info').css('display', 'block');
			}
		});
	}, function() {
		$('ul.cart-info').children().remove();
		$('ul.cart-info').css('display', 'none');
	});

	$('.menuCategory ul li').hover(function() {
		$(this).find('div.box-up').css('display', 'flex');
	}, function() {
		$(this).find('div.box-up').css('display', 'none');
	});

	$('b.plus').click(function(event) {
		$(this).toggleClass('glyphicon-minus');
		$(this).parents('li').find('.item-moblie').toggle(1000);
	});

	$('.item-menu-level1 b.plus-item').click(function(event) {
		$(this).toggleClass('glyphicon-minus');
		$(this).parents('.item-menu-level1').find('.item-menu-sub').toggle(1000);
	});

	$('button.watch-fast').click(function(event) {

		var id_book = $(this).parent().find('.book-id').val();

		$.ajax({
			url: 'http://localhost/project_bookstore/client/ajax/quickview',
			type: 'get',
			data: {
				id: id_book
			},
			dataType: 'json', 
			success: function(data, status) {
				$('div.quickview img').attr('src', 'http://localhost/project_bookstore/public/admin/upload/images-book/' + data.image);
				$('div.quickview div.book-info .book-name').text(data.name);
				$('div.quickview div.book-info .book-description').html(  data.description);
				$('div.quickview div.book-info .book-price').text('Giá: ' + data.price);
				$('div.quickview div.book-info .book-author').text('Tác giả: ' + data.author);
			},
			complete: function(jqXHR, textStatus) {
				$('div.quickview').addClass('show-quickview');
				$('div.den').addClass('show-quickview');
			}
		});
		
	});

	$('.btn-close, .den').click(function(event) {
		$('div.quickview').removeClass('show-quickview');
		$('div.den').removeClass('show-quickview');
	});

	$(document).keyup(function(event) {
		if (event.keyCode == 27) {
			$('div.quickview').removeClass('show-quickview');
			$('div.den').removeClass('show-quickview');
		}
	});


	$('.qty_increase').click(function(event) {
		var quantity = $(this).parent().find('.qty_value').val();
		quantity ++;
		$(this).parent().find('.qty_value').val(quantity);
	});

	$('.qty_reduce').click(function(event) {
		var quantity = $(this).parent().find('.qty_value').val();
		if(quantity > 1) {
			quantity --;
			$(this).parent().find('.qty_value').val(quantity);
		}
	});

	$('.cart-add').click(function(event) {
		var id = $(this).parents('div.one_product').find('.book-id').val();
		$.ajax({
			url: 'http://localhost/project_bookstore/client/ajax/addCartItem',
			type: 'GET',
			cache:false,
			data: {
				'id': id
			},
			dataType: 'json',
			success: function(data,status) {
				if (data.status == 'success') {
					$('.loader').css('display', 'block');
				} 
			},
			complete: function(jqXHR, textStatus) {
				if(textStatus == 'success') {
					$('.loader').delay(1000).fadeOut('fast');
					location.reload(true);
				}
			}

		});
	});

	$('a.updateCart').click(function(event) {
		var row_id = $(this).attr('id');
		var quantity = $(this).parent().parent().find('.qty_value').val();
		var token = $("input[name='_token']").val();
		$.ajax({
			url:'http://localhost/project_bookstore/client/ajax/update-Cart/'+row_id+'/'+quantity,
			type: 'get',
			cache: false,
			data: {'token': token, 'quantity': quantity, 'row_id': row_id},
			success: function(data,status) {
				if (data == "oke") {
					window.location = 'cart';
				}
			}
		});
	});

	$(".menu-detail-item").hover(function() {
		$(this).find('.menu-child').css('display', 'block');
	}, function() {
		$(this).find('.menu-child').css('display', 'none');
	});
});