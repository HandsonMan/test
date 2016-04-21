$(function(){
	$('.recovery-products').hover(function() {
		$(this).children('.transparent-bg').fadeIn(300);
	}, function() {
		$(this).children('.transparent-bg').fadeOut(300);
	});
});
