// Page init
jQuery(function(){
	initTabs();
	initSameHeight();

	var $drops = $('#nav > ul > li');
	$drops.on('mouseleave', function(){
		$drops.find('li').removeClass('active');
		$drops.find('.tab').addClass('js-tab-hidden');
	});

	initCarousel();
	jcf.customForms.replaceAll();

	// Fuild layout, centering the items
	$('.carousel-intro').carouFredSel({
		width: '100%',
		items: {
			visible: 3,
			start: -1
		},
		scroll: {
			items: 1,
			duration: 1000,
			timeoutDuration: 10000
		},
		prev: '.prev',
		next: '.next',
		pagination: {
			container: '#carousel-controls',
			deviation: 1
		}
	});

	$('.carousel-content').carouFredSel({
		width: '100%',
		items: {
			visible: 3,
			start: 0
		},
		auto: false,
		scroll: 1,
		prev: '.prev-news',
		next: '.next-news'
	});

	$('.carousel-top-sales').carouFredSel({
		width: '100%',
		items: {
			visible: 1,
			start: 0
		},
		scroll: {
			items: 1,
			duration: 1000,
			timeoutDuration: 5000
		},
		prev: '.prev-sales',
		next: '.next-sales'
	});

	$('.product-carousel').carouFredSel({
		width: '100%',
		items: {
			visible: 5,
			start: 0
		},
		auto: false,
		scroll: 1,
		prev: '.prev-product',
		next: '.next-product'
	});

	$('.carousel-drop').carouFredSel({
		width: '100%',
		items: {
			visible: 1,
			start: 0
		},
		auto: false,
		scroll: 1,
		prev: '.prev-drop',
		next: '.next-drop'
	});

	$('#area').change(function () {
		var val = $(this).val();
		$('.slider_area').slider("values", 0, val);
	});

	$('.price2').change( function() {
		var val2 = $(this).val();
		$('.slider_area').slider("values", 1, val2);
	});

	$('.area, .area2').hover(function(){
		$(this).closest('li').addClass('hover');
	},function(){
		$(this).closest('li').removeClass('hover');
	});

	$('.slider_area').slider({
		range: true,
		min: 115,
		max: 353,
		step: 1,
		values: [150, 300],
		slide: function(event, ui) {
			$('.area').val(ui.values[0]);
			$('.area2').val(ui.values[1]);
		}
	});

	$('.inner-drop li').each(function(){
		var element = $(this);
		$('a', element).on('hover', function(e){
			e.preventDefault();
			if(element.index() > 0){
				var blockParent = $($(this).data('href')),
					block = $('.drop-sub-nav', blockParent);
					blockHeight = block.height(),
					index = element.index();
				if (index > 0) {
					if(blockHeight > 37)
						block.css({
							'padding-top': index*37 - blockHeight/2 + 10
						});
					else
						block.css({
							'padding-top': index*37 - 7
						});
				}
			}
		});
	});
});

// Content tabs init
function initTabs() {
	jQuery('ul.tabset').contentTabs({
		addToParent: true,
		animSpeed: 100,
		effect: 'none',
		tabLinks: 'a',
		event: 'mouseenter',
		attrib: 'data-href'
	});
}

// Align blocks height
function initSameHeight() {
	jQuery('.list-magazines').sameHeight({
		elements: 'li.block',
		leftEdgeClass: 'left',
		flexible: true,
		multiLine: true
	});
	jQuery('.list-video').sameHeight({
		elements: 'li',
		leftEdgeClass: 'left',
		flexible: true,
		multiLine: true
	});
}

// Scroll gallery init
function initCarousel() {
	jQuery('div.slider').scrollGallery({
		mask: 'div.mask',
		slider: 'div.slideset',
		slides: 'div.slide',
		btnPrev: 'a.btn-prev',
		btnNext: 'a.btn-next',
		pagerLinks: '.pagination li',
		stretchSlideToMask: true,
		autoRotation: false,
		switchTime: 5000,
		animSpeed: 500
	});
}
