$.material.init();
$(document).ready(function(){

  $("html").niceScroll({
    cursorcolor:"gold",
    cursorwidth:"8px",
    scrollspeed:"120",
    mousescrollstep:"80",
    hidecursordelay:"250"
  });

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

  var master = new TimelineMax();
  master.add(sceneOne(), "scene1")
    .add(sceneTwo(), "-=8", "scene2");

  //akciya
  $("#kotel").click(function(e){
    $.fancybox("<p>При заказе строительства дома от 90 кв. метров до <nobr>31.11.2015</nobr>. газовый или электрический двухконтурный отопительный котел в подарок.</p><p>Подробности акции узнавайте по телефонам  <nobr>+7 (4922) 37-73-90</nobr> <nobr>+7 (4922) 37-73-92</nobr></p><p>Или приходите к нам в офис по адресу г. Владимир ул. Мира <nobr>д.15В офис 312</nobr></p>", {
      maxWidth  : 500,
      maxHeight : 500,
      fitToView : false,
      width   : '90%',
      height    : 'auto',
      autoSize  : false,
      openEffect  : 'none',
      closeEffect : 'none',
      scrollOutside: false, //scroll
      helpers: {overlay: {locked: false}} //scroll
    });
  });
  $("#snezhinka").click(function(e){
    $.fancybox("<p>Закажи строительство на <b>2016</b> год до 31.12.2015 - сохрани цены на строительство <b>2015</b> года.</p><p>Подробности акции узнавайте по телефонам  <nobr>+7 (4922) 37-73-90</nobr> <nobr>+7 (4922) 37-73-92</nobr></p><p>Или приходите к нам в офис по адресу г. Владимир ул. Мира <nobr>д.15В офис 312</nobr></p>", {
      maxWidth  : 500,
      maxHeight : 500,
      fitToView : false,
      width   : '90%',
      height    : 'auto',
      autoSize  : false,
      openEffect  : 'none',
      closeEffect : 'none',
      scrollOutside: false, //scroll
      helpers: {overlay: {locked: false}} //scroll
    });
  });
});

(function() {
	[].slice.call( document.querySelectorAll( '.tabs' ) ).forEach( function( el ) {
		new CBPFWTabs( el );
	});
})();

//logo
var $dom1 = $("#dom1"),
  $dom2 = $("#dom2"),
  $dom3 = $("#dom3"),
  $dom4 = $("#dom4"),
  $dom5 = $("#dom5"),
  $dom6 = $("#dom6"),
  $dom7 = $("#dom7"),
  $g = $("#g"),
  $o = $("#o"),
  $l = $("#l"),
  $d = $("#d"),
  $e = $("#e"),
  $n = $("#n"),
  $h = $("#h"),
  $o2 = $("#o2"),
  $m = $("#m"),
  $e2 = $("#e2"),
  $rc = $("#rc"),
  $r = $("#r"),
  dom = [$dom1, $dom2, $dom3, $dom5, $dom4, $dom6, $dom7, $rc, $r],
  text = [$g, $o, $l, $d, $e, $n, $h, $o2, $m, $e2],
  $speedDraw = 6;

function sceneOne() {
  var tl = new TimelineMax()
    .staggerFromTo(text, 50, {
      autoAlpha: 0,
      x: "10",
      ease: Expo.easeOut,
      y: 0
    }, {
      autoAlpha: 1,
      x: 0,
      ease: Expo.easeOut,
      y: 0
    }, 1.2)
  tl.timeScale($speedDraw);
  return tl;
};

function sceneTwo() {
  var tl = new TimelineMax()
    .staggerFromTo(dom, 100, {
      autoAlpha: 0,
      ease: Elastic.easeOut.config(2, 0.7)
    }, {
      autoAlpha: 1,
      ease: Elastic.easeOut.config(2, 0.7)
    }, 1.2)
  tl.timeScale($speedDraw);
  return tl;
};
