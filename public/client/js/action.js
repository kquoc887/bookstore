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

	$(document).on('mouseover', '.one_product', function(event) {
			$(this).find('a.cart-add').css('display', 'block');
		$(this).find('.watch-fast').css('opacity', '1');
	});

	$(document).on('mouseout', '.one_product', function(event) {
			$(this).find('a.cart-add').css('display', 'none');
		$(this).find('.watch-fast').css('opacity', '0');
	});


	$("a.cart").hover(function() {
		$.ajax({
			url:'http://192.168.1.30:8080/project_bookstore/client/ajax/getListCart',
			type: 'get',
			cache:false,
			dataType:'json',
			success: function(data, status) {
				$('ul.cart-info').children().remove();
				for (var i = 0; i < data.length; i++) {
					var path = "http://192.168.1.30:8080/project_bookstore/public/admin/upload/images-book/" + data[i].options['img'];
					$('ul.cart-info').append('<li class="cart-item"><img class="img-cart" src="'+path +'"><p>'+data[i].name+'</p><p>'+data[i].qty+' x '+data[i].price+' VNĐ</p></li>');
				}
				$('ul.cart-info').append('<li class="cart-item"><a href="http://192.168.1.30:8080/project_bookstore/client/purchase/cart" class="btn btn-primary">Xem giỏ hàng</a</li>')

				
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


	$(document).on('click', 'button.watch-fast', function(event) {
		var id_book = $(this).parent().find('.book-id').val();

		$.ajax({
			url: 'http://192.168.1.30:8080/project_bookstore/client/ajax/quickview',
			type: 'get',
			data: {
				id: id_book
			},
			dataType: 'json', 
			success: function(data, status) {
				$('div.quickview img').attr('src', 'http://192.168.1.30:8080/project_bookstore/public/admin/upload/images-book/' + data.image);
				$('div.quickview div.book-info .book-name').text(data.name);
				$('div.quickview div.book-info .book-description').html(  data.description);
				$('div.quickview div.book-info .book-price').text('Giá: ' + data.price);
				$('div.quickview div.book-info .book-author').text('Tác giả: ' + data.author);
				$('div.quickview div.block-btn .book-id').attr('value', data.id);
			},
			complete: function(jqXHR, textStatus) {
				$('div.quickview').addClass('show-quickview');
				$('div.den').addClass('show-quickview');
			}
		});
	})

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

	$(document).on('click', 'a.cart-add', function(event) {
		var id = $(this).parents('div.one_product').find('.book-id').val();
		var qty = $('.qty_value').val();
		$.ajax({
			url: 'http://192.168.1.30:8080/project_bookstore/client/ajax/addCartItem',
			type: 'GET',
			cache:false,
			data: {
				'id': id,
				'qty': qty
			},
			dataType: 'json',
			success: function(data,status) {
				if (data.status == 'success') {
					$('.loader').css('display', 'block');
				} 
			},
			complete: function(jqXHR, textStatus) {
				if(textStatus == 'success') {
					$('.loader').delay(4).fadeOut('fast');
					swal("Cảm ơn!", "Bạn đã thêm thành công 1 sản phẩm vào vỏ hàng", "success").then(() => {
						location.reload(true);
					});
				}
			}

		});
	})



	$('a.updateCart').click(function(event) {
		var row_id = $(this).attr('id');
		var quantity = $(this).parent().parent().find('.qty_value').val();
		var token = $("input[name='_token']").val();
		$.ajax({
			url:'http://192.168.1.30:8080/project_bookstore/client/ajax/update-Cart/'+row_id+'/'+quantity,
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

	// var count = 1;
	// $('input[name=checkout_type]').change(function () {
		
	// 	if (count == 1) {
	// 		$('div.checkout_button').css('display', 'none');
	// 		$('div.cm_noscript').css('display', 'block');
	// 		count ++;
	// 	}
	// 	else {
	// 		$('div.checkout_button').css('display', 'block');
	// 		$('div.cm_noscript').css('display', 'none');
	// 		count --;
	// 	}
	// }); 

	$('#register').click(function() {
		$('.step_one_login').css('display', 'none');
		$('.step_one_register').css('display', 'block');
		$('.step_two').css('margin-top', '20px');
	})

	$('#checkout_guest').click(function(event) {
		$('.step_one_login').css('display', 'none');
		$('.step_one').css('margin-bottom', '5px');
		$('.step_one .step_title_left').addClass('glyphicon glyphicon-ok').html('');
		$('.step_title_active').removeClass('step_title_active');
		$('.step_two').css('margin-top', '0px');
		$('.step_two .step_title').addClass('step_title_active');
		$('.info_user').css('display', 'block');
	});

	$('#login').click(function(event) {
		$('.dialog-login').css('display', 'block');
		$('.den').css({
			opacity: '1',
			visibility: 'visible'
		});
	});

	$('.den, #dialog_close').click(function(event) {
		$('.dialog-login').css('display', 'none');
		$('.den').css({
			opacity: '0',
			visibility: 'hidden'
		});
	});

	$('a#btn-login').click(function(event) {
		var form_group = $('form[name=client-login').find('.form-group');
		$(form_group[0]).find('p').remove();
		$(form_group[1]).find('p').remove();
		var username = $('input[name=username]').val();
		var password = $('input[name=password]').val();
		$.ajax({
			url: 'http://192.168.1.30:8080/project_bookstore/client/ajax/login-ajax' ,
			type: 'GET',
			cache: false,
			dataType: 'json',
			data: {'us': username, 'pass': password},
			success: function(data, status) {
				console.log(data);
				if (data.username != '' && data.password != '' || (data.username != '' && data.password == '') || (data.username == '' && data.password != '')) {
					$(form_group[0]).append('<p class="text-danger">'+ data.username +'</p>');
					$(form_group[1]).append('<p class="text-danger">'+ data.password +'</p>');	
				} else if(data.username == '' && data.password == '') {
					$('#form-login-ajax').submit();
				}
				
				// console.log(data);
			}
		});
	});

	$('input[name=category]').change(function(event) {
		var category_id = $(this).val();
		console.log(category_id);
		$.ajax({
			url: 'http://192.168.1.30:8080/project_bookstore/client/ajax/ajax-book' ,
			type: 'GET',
			cache: false,
			dataType: 'json',
			data: {'cate_id': category_id},
			success: function(data, status) {
				$('.dmuc_right').children().remove();
				for (var i = 0; i< data.length; i++) {
					var xhtml = '<div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 ">'
					xhtml +='<div class="one_product"><div class="pro-action"><a class="cart-add" >+Thêm vào giỏ<i class="glyphicon glyphicon-shopping-cart"></i></a></div>';
					xhtml += '<img class="img-responsive" src="http://192.168.1.30:8080/project_bookstore/public/admin/upload/images-book/' + data[i].image + '">';
					xhtml += '<div class="pro-detail"><h3 class="pro-name"><a href="http://192.168.1.30:8080/project_bookstore/client/detail/' + data[i].id +'">'+data[i].name+'</a></h3>';
					xhtml += '<div class="pro-price"><p><span>' + data[i].price + '</span></p><input type="hidden" class="book-id" value="'+data[i].id+'"><button class="btn btn-primary watch-fast" >Xem nhanh</button></div></div></div></div>';
					$('.dmuc_right').append(xhtml);
				}
			}
		});
	});
});