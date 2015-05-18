// JavaScript Document
var $container = ('div'), $portfolio = ('.portfoio');
$(document).ready(function() {
    $(window).scroll(function() {
		if($(this).scrollTop() > 75) {
			$(".scrollup").fadeIn();
		} else {
			$(".scrollup").fadeOut();
		}
	});
	
	$('.scrollup').click(function() {
		$('html, body').animate({scrollTop : 0},800);
		return false;
	});
	
	$(window).on("contextmenu", function(e) {
    	e.preventDefault()
	});
	
	$(".staff").click(function() {
    	$('html, body').animate({
        	scrollTop: $("#staff").offset().top
    	}, 2000);
	});
});