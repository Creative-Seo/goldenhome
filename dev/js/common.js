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

//animate
$(function () {

  var controller = new ScrollMagic.Controller();
  var controller2 = new ScrollMagic.Controller();
  var controller5 = new ScrollMagic.Controller();
  var controller6 = new ScrollMagic.Controller();
  var controller7 = new ScrollMagic.Controller();

  var row31 = document.getElementsByClassName("row31");
  var row32 = document.getElementsByClassName("row32");
  var row33 = document.getElementsByClassName("row33");

  var row41 = document.getElementsByClassName("row41");
  var row42 = document.getElementsByClassName("row42");
  var row43 = document.getElementsByClassName("row43");

  var row51 = document.getElementsByClassName("row51");
  var row52 = document.getElementsByClassName("row52");
  var row53 = document.getElementsByClassName("row53");

  var row61 = document.getElementsByClassName("row61");
  var row62 = document.getElementsByClassName("row62");
  var row63 = document.getElementsByClassName("row63");

  var row71 = document.getElementsByClassName("row71");
  var row72 = document.getElementsByClassName("row72");
  var row73 = document.getElementsByClassName("row73");
  var row74 = document.getElementsByClassName("row74");
  
  var sceneRow3 = new TweenMax.staggerFrom([row31, row32, row33], 0.3, {opacity:0, top:"100px", ease:Power1.easeInOut}, 0.2);
  var sceneRow4 = new TweenMax.staggerFrom([row41, row42, row43], 0.3, {opacity:0, top:"100px", ease:Power1.easeInOut}, 0.2);
  var sceneRow5 = new TweenMax.staggerFrom([row51, row52, row53], 0.3, {opacity:0, top:"100px", ease:Power1.easeInOut}, 0.2);
  var sceneRow6 = new TweenMax.staggerFrom([row61, row62, row63], 0.3, {opacity:0, top:"100px", ease:Power1.easeInOut}, 0.2);
  var sceneRow7 = new TweenMax.staggerFrom([row71, row72, row73, row74], 0.3, {opacity:0, top:"100px", ease:Power1.easeInOut}, 0.2);

 
  var scene1 = new ScrollMagic.Scene({
          triggerElement: ".row3",
          triggerHook: 0.8,
          reverse:false,
          duration: 0
        })
        .setTween(sceneRow3)
        //.addIndicators()
        .addTo(controller);

  var scene4 = new ScrollMagic.Scene({
          triggerElement: ".row4",
          triggerHook: 0.8,
          reverse:false,
          duration: 0
        })
        .setTween(sceneRow4)
        //.addIndicators()
        .addTo(controller2);

  var scene5 = new ScrollMagic.Scene({
          triggerElement: ".row5",
          triggerHook: 0.8,
          reverse:false,
          duration: 0
        })
        .setTween(sceneRow5)
        //.addIndicators()
        .addTo(controller5);

  var scene6 = new ScrollMagic.Scene({
          triggerElement: ".row6",
          triggerHook: 0.8,
          reverse:false,
          duration: 0
        })
        .setTween(sceneRow6)
        //.addIndicators()
        .addTo(controller6);

  var scene7 = new ScrollMagic.Scene({
          triggerElement: ".row7",
          triggerHook: 0.8,
          reverse:false,
          duration: 0
        })
        .setTween(sceneRow7)
        //.addIndicators()
        .addTo(controller7);


});

(function() {
	[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
		new CBPFWTabs( el );
	});
})();