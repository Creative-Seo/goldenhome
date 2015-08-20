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
});