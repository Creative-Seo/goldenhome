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
	
	$(window).scroll(function(){
        if ($(this).scrollTop() > 100) {
            $('.scrollUpButton').fadeIn();
        } else {
            $('.scrollUpButton').fadeOut();
        }
    });
    $('.scrollUpButton').click(function(){
        $("html, body").animate({ scrollTop: 0 }, 500);
        return false;
    });
});

(function() {
	[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
		new CBPFWTabs( el );
	});
})();