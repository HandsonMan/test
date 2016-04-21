$(function(){
	$('#hover h1').hover(function() {
		if($("#bg").css("opacity") == 1){
			$('#bg').fadeIn(300);
			}
		}
		// , function() {
			// $('#bg').fadeOut(300);
	// }
	);
});
