jQuery(function($) {

	//Preloader
	var preloader = $('.preloader');
	$(window).load(function(){
		preloader.remove();
	});


	

	// Get the header
	var prevScrollpos  = $('.main-nav').scrollTop();
	
	//Scroll Menu
	$(window).on('scroll', function(){
		var currentScrollPos = $(window).scrollTop();
		if( currentScrollPos < prevScrollpos && currentScrollPos!=0 ){
			if (!($('.main-nav').hasClass( 'navbar-fixed-top' ))) {
				setTimeout(function() {
					$('.main-nav').addClass('navbar-fixed-top'); // line 57 in jquery.sticky.js
				}, 100);
			}
		} else {
			setTimeout(function() {
				$('.main-nav').removeClass('navbar-fixed-top');
			}, 100);
		}
		prevScrollpos = currentScrollPos;
	});
	

	
    // Animate something, by adding animation class that stored in data-effect field 
    function animate(elem){
		var effect = elem.data("effect");
		if(!effect || elem.hasClass(effect)) return false;
		elem.addClass(effect);
		setTimeout( function(){
			elem.removeClass(effect);
		}, 1000); 
	}


	

// collapse on mobile after click	
	$('.navbar-collapse a:not(.dropdown-toggle)').click(function(){
		$(".navbar-collapse").collapse('hide');
	});	
	$('.navbar-collapse .dropdown-menu').click(function(){
		$(".navbar-collapse").collapse('hide');
	});
//--- end collapse mobile after click	
// smooth moving inside one-page . Please note, that real href is not executed, so 
// TODO: execute the href is needed (example - 'purchase'
/*
	$('.navbar-collapse ul .scroll a').on('click', function() {  
		$('html, body').animate({scrollTop: $(this.hash).offset().top - 5}, 1000);
		return false;
	});
*/	
	
	//Initiat WOW JS
	new WOW().init();
	//smoothScroll
	smoothScroll.init();
	
	
});



