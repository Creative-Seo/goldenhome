/*$(function () {
	var scene=[], controller = new ScrollMagic.Controller();
	$(".imgd").each(function (i,e){
		var el = $(e).attr('id');
		var sceneRow = new TweenMax.from(el, 1, {opacity:0, top:"200px", ease:Power1.easeInOut}, 0.8);
		scene[i] = new ScrollMagic.Scene({
			  triggerElement: e,
			  triggerHook: 0.8,
			  reverse:false,
			  duration: 0
		})
		.addTo(controller);
		scene[i].on("end", function () {scene[i].setTween(sceneRow)});
	});
});*/