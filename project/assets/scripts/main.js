jQuery(document).ready(function($) {
	$(window).scroll(function() {
		var MenuHeight=$(window).scrollTop();
		if (MenuHeight>=40) {
			$(".navbar-index").addClass('menu');
		}else{
			$(".navbar-index").removeClass('menu');
		}
	});
});