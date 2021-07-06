 
$(document).ready(function() {
	$(window).scroll(function() {
		if ($(this).scrollTop() > 1200) {
			$('#toTopBtn').fadeIn();
		} else {
			$('#toTopBtn').fadeOut();
		}
	});

	$('#toTopBtn').click(function() {
		$("html, body").animate({
			scrollTop: 700
		}, 1000);
		return false;
	});
});





