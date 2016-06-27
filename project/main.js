jQuery(document).ready(function($) {
	$(window).scroll(function() {
		var MenuHeight=$(window).scrollTop();
		if (MenuHeight>=40) {
			$(".navbar").addClass('menu');
		}else{
			$(".navbar").removeClass('menu');
		}
	});
});