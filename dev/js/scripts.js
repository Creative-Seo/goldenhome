$(document).ready(function() {
	$('#myTab a').click(function (e) {e.preventDefault();$(this).tab('show');})
	
	$(".fancybox").fancybox({openEffect: 'none',closeEffect: 'none'});

	$(".fancybox-thumb").fancybox({
		prevEffect	: 'none',
		nextEffect	: 'none',
		showNavArrows : 'true',
		helpers	: {title: {type: 'outside'}, thumbs: {width: 50, height: 50}}
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

	$('#modal-zakaz .btn-zakaz').click(function(){
		var n = $('#name-z').val(),
			t = $('#tel-z').val(),
			k = $('#kol').val(),
			m = $('#message').val(),
			nomer = "<? echo $nomer ?>",
			error = '';
		$('#name-z').removeClass('error');
		$('#tel-z').removeClass('error');
		$('#kol').removeClass('error');
		if(!n) { $('#name-z').addClass('error'); error+= 'Вы не заполнили поле "Ваше имя"!\n'; }
		if(!t) { $('#tel-z').addClass('error'); error+= 'Вы не заполнили поле "Ваш телефон"!\n'; }
		if(!k) { $('#tel-z').addClass('error'); error+= 'Вы не указали количество блоков!\n'; }
		if (error != '') {alert('Обнаружены ошибки:\n'+error);return false;}
		$.post('http://www.sk-goldenhome.ru/ajax4.php',{ n: n, t: t, k: k, nomer: nomer, m: m, key: 'xZuyP93oNVpiNx4w4EemBxbFvGNFgWah'})
			.done(function(data) {alert(data);})
			.fail(function() {alert('Ошибка отправки данных.');});
		return false;
	});
});