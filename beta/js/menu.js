$(document).ready(function(){
	var menusuperior = $('.menu').offset().top;
	
	$(window).on('scroll', function(){
		if ( $(window).scrollTop() > menusuperior ){
			$('.menu').addClass('menu-estatico');
		} else {
			$('.menu').removeClass('menu-estatico');
		}
	});

});