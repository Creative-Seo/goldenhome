var img='#wrapper .stroitelstvo';
var a = {'stroitelstvo' : '<p><span>����� 100</span> �����������<br> �����</p>',
		'proekty-domov' : '<p><span>���� �������</span> ������ ��������<br> ��������</p>',
		'prodazha-domov' : '<p><span>�������� �����</span><br> ����� ������<br> ��������</p>',
		'dizayn-interyera' : '<p><span>��</span><br> ����������<br> ���� �����</p>',
		'gazobloki' : '<p><span>������������� ������</span><br> � ������ ������</p>'};
$(document).ready(function (){
	$('#icons a').mouseenter(function () {
		var pointer = '#wrapper .'+$(this).attr('data-pointer');
		if (img!=pointer) {
			$('#icons li').removeClass('action');
			$(this).parent().addClass('action');
			$('.child .jumbotron').html(a[$(this).attr('data-pointer')]);
			$(pointer).css('z-index', 0).css('opacity', 1);
			$(img).css('z-index', -2).css('opacity', 0);
			$(pointer).css('z-index', -1);
			img=pointer;
		}
	});
});