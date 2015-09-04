$.material.init();
$(document).ready(function(){
	$.material.ripples('.nav a');
	$('#blindify').blindify({
		numberOfBlinds: 10,
		animationSpeed: 1200,
		delayBetweenSlides: 600,
		color: '#fff',
		width: 550,
		height: 500,
		gap: 100,
		margin: 1
	});

    $("#myTab li:eq(0) a").tab('show');
});

(function() {
	[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
		new CBPFWTabs( el );
	});
})();