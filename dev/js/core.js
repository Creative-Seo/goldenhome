$(document).ready(function() {

  $('.box-subscribe form').validationEngine({scroll: false, binded: false, promptPosition: 'topRight'});

  $("a[rel='jquery-lightbox']").colorbox({
    photo: true,
    opacity: 0.70,
    initialWidth: 125,
    initialHeight: 100,
    returnFocus: false,
    maxWidth: $(window).width()-50,
    current: 'Image {current} of {total}'
  });

  $("a[rel='jquery-lightbox-video']").colorbox({
    fixed: true,
    iframe: true,
    opacity: 0.70,
    innerWidth: 640,
    innerHeight: 480,
    initialWidth: 125,
    initialHeight: 100,
    current: 'Image {current} of {total}'
  });

  if ($('.block-project').length) {
    var query, sel;

    query = $('.block-project').data('name');
    sel = '.projects-list-slider a[data-name="' + query + '"]';

    if ($(sel).length) {
      $(sel).closest('li').find('.visual').addClass('active');
      var i = $('.projects-list-slider ul').index($(sel).closest('ul'));
      var api = $('div.slider').data('ScrollGallery');
      api.numSlide(i);
    }
  }

  var loc = location.href.replace(/[?#].*$/, '');

  $('#nav .tab-content a').each(function(index) {
    if (this.href == location.href) {
      $(this).addClass('active');

      var sel = '#nav .inner-drop > ul a[data-href="#' + $(this).closest('div.tab').attr('id') + '"]';
      $(sel).addClass('active');
    }
  });

  $('#nav .inner-drop > ul a').each(function(index) {
    if (this.href == loc || $(this).hasClass('active') || ($(this).data('regex') && location.href.match($(this).data('regex')))) {
      $(this).addClass('active');

      var $li = $(this).closest('div.drop').parent();
      
      var i = $('#nav .row > li').index($li);

      $('#sidebar .sidebar-nav li').eq(i).addClass('active');
      var menu = $('#nav .row > li').eq(i).find('.inner-drop > ul').html();
      $('#sidebar .sub-nav ul').html(menu);
    }
  });

$(document).ready(function(){
	$('#print-buttom').click(function(){
		$('#print').text("ymaps{page-break-after: always;} #content {margin:0;} #colorbox, iframe, header, nav, #sidebar, .breadcrumb-container, #print-buttom, .kakproiti, .artcontcv, .scrollUpButton, footer, #jivo_top_wrap, #jivo_copyright, #jivo_css_detector {display: none;}");
		window.print();
		$('#print').text("");
	});
});

});
