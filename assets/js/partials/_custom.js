(function( $ ) {

	$(window).scroll(function() {
		if ($(document).scrollTop() > 50) {
			$('nav').addClass('shrink');
			$('.navbar-toggler').find('svg').removeClass('fa-2x');
		} else {
			$('nav').removeClass('shrink');
			$('.navbar-toggler').find('svg').addClass('fa-2x');
		}
	});

})( jQuery );


