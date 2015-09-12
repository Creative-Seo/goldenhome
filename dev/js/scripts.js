$(document).ready(function() {
	$('#myTab a').click(function (e) {e.preventDefault();$(this).tab('show');})
	
	$(".fancybox").fancybox({
		openEffect: 'none',
		closeEffect: 'none',
		beforeShow : function() {
			var alt = this.element.find('img').attr('alt');
			if (alt) {this.inner.find('img').attr('alt', alt);this.title = alt;}
		}
	});

	$(".fancybox-thumb").fancybox({
		prevEffect	: 'none',
		nextEffect	: 'none',
		showNavArrows : 'true',
		helpers	: {title: {type: 'outside'}, thumbs: {width: 50, height: 50}},
		beforeShow : function() {
			var alt = this.element.find('img').attr('alt');
			if (alt) {this.inner.find('img').attr('alt', alt);this.title = alt;}
		}
	});

	$('#print-buttom').click(function(e){
		e.preventDefault();
		$('#print').text(".cont {page-break-after: always;} #rh-snippet, #rh-snippet-end, header, nav, .breadcrumb-container, #print-buttom, .likeh2, .contact-form, #rc-connect, footer {display: none;}");
		window.print();
		$('#print').text("");
	});
    $('#imageGallery').lightSlider({
		adaptiveHeight:true,
        gallery:true,
        item:1,
        thumbItem:6,
        slideMargin:0,
		vThumbWidth:100,
        currentPagerPosition:'left',
        onSliderLoad: function(plugin) {plugin.lightGallery();}   
    });

});