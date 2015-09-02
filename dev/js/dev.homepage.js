var img='#wrapper .stroitelstvo';
var a = {'stroitelstvo' : '<p><span>Более 100</span><br>построенных<br> домов</p>',
		'proekty-domov' : '<p><span>Наши проекты</span><br>всегда высокого<br> качества</p>',
		'prodazha-domov' : '<p><span>Огромный выбор</span><br> самых разных<br> построек</p>',
		'dizayn-interyera' : '<p><span>Мы</span><br>осуществим<br> вашу мечту</p>',
		'gazobloki' : '<p><span>Сопутствующие товары</span><br>и многое другое</p>'};
$(document).ready(function (){
	$('#icons a').mouseenter(function () {
		var pointer = '#wrapper .'+$(this).attr('data-pointer');
		if (img!=pointer) {
			$('#icons li').removeClass('action');
			$(this).parent().addClass('action');
			$('#wrapper-text').html(a[$(this).attr('data-pointer')]);
			$(pointer).css('z-index', 0).css('opacity', 1);
			$(img).css('z-index', -2).css('opacity', 0);
			$(pointer).css('z-index', -1);
			img=pointer;
		}
	});
});