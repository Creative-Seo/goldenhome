$(function () {
	var scene=[], controller = new ScrollMagic.Controller();
	$(".imgd > div").css("position","relative");
	var tl = new TimelineMax();
//	tl.add(TweenMax.to(".imgd > div", 0, {opacity:0, top:"200px", ease:Power1.easeInOut}));
	$(".imgd").each(function (i,e){
		scene[i] = new ScrollMagic.Scene({
			  triggerElement: e,
			  triggerHook: 0.8,
			  reverse:false,
			  duration: 0
		})
//		.addIndicators()
		.addTo(controller)
		.on("start", function (el) {
			var tm = $(el.target.triggerElement()).attr("id"); 
			tl.add(TweenMax.to("#"+tm+" > div", 0.3, {opacity:1, top:"0", ease:Power1.easeInOut},0.1));
		});
	});
});