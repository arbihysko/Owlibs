$(function() {

	// Scroll event
	$(window).scroll(function() {
		if ($(window).scrollTop() >= 1 && !$('#navBar').is(":hover")) {
			$("#navBar").css({
				'height':'4em'
			});
		}
		if ($(window).scrollTop() == 0) {
			$("#navBar").css({
				'height':'6em'
			});
		}
		if ($(window).scrollTop() >= 500) {
			$("#goTop").css({
				'visibility':'visible',
				'opacity':'1'
			});
		} else {
			$("#goTop").css({
				'opacity':'0',
				'visibility':'hidden'
			});
		}
	});
	
	// GoTop Event scroll
	$('#goTop').click(function() {
		$("html, body").animate({ scrollTop: 0 }, '500');
		return false;
	});

	// navBar click hover
	$(".barElement").on("click", function() {
		if ($(".navContent").css('visibility') == 'hidden') {
			$(".navContent").css({
				'visibility':'visible',
				'opacity':'1',
				'transform':'translateY(0)'
			});
		} if ($(".navContent").css('visibility') == 'visible') {
			$(".navContent").css({
				'opacity':'0',
				'visibility':'hidden',
				'transform':'translateY(5em)'
			});
		}
	});

	$("#navBar").hover(function() {
		$("#navBar").css({'height':'6em'});
	}, function() {
		if($(window).scrollTop() >= 1 && $(".navContent").css('visibility') == 'hidden') {$(this).css({
			'height':'4em'
		});}
	});

	// Search click
	$("#search").on('click', function() {
		$(this).parent().children().hide('600');
		if ($(".navContent").css('visibility') == 'visible') {
			$(".navContent").css({
				'opacity':'0',
				'visibility':'hidden',
				'transform':'translateY(5em)'
			});
		}
		setTimeout(function() {
			$("#searchDiv").css({
					'display':'inline-block'
				}).animate({
					'opacity':'1'
				}, 0);
			$("#closeSearch").css({
				'display':'inline-block'
			})}, 600);
		setTimeout(function() {$("#searchBox").focus()}, 600);
	});
	$("#closeSearch").on('click', function() {
		$(this).hide();
		$("#searchDiv").animate({'opacity':'0'}, 600).css({
			'display':'none'
		});
		$(this).siblings('li').show('600');

	});

	//alert(1);
});