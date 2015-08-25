function SortS(a, b) {
  if (dirs[a][0] > dirs[b][0]) return 1;
  if (dirs[a][0] < dirs[b][0]) return -1;
}

function update_proekts() {
	re=new RegExp (form['select1'],"i");
	$('.block_proekt').each(function (){
		var obj = dirs[$(this).attr('data-dir')];
		var c = true;
		if (!((form['slider1'][0].replace(/\s+/g,'')<=obj[0]*15000)&&(form['slider1'][1].replace(/\s+/g,'')>=obj[0]*15000)&&
			(form['slider2'][0].replace(/\s+/g,'')<=obj[0])&&(+form['slider2'][1].replace(/\s+/g,'')>=obj[0])) ) {c = false;}
		if (!((+(form['col-et']==obj[2])||(form['col-et']=='Не имеет значение'))&&((form['arch-st']==obj[3])||(form['arch-st']=='Не имеет значение')))) {c = false;}
		if (form['checkbox'].length>0) {$.each(form['checkbox'], function(i,v){if ($.inArray(form['checkbox'][i],obj[4])==-1){c = false;}});}
		if (c) {$(this).parent().fadeIn().removeClass('hid');} else {$(this).parent().fadeOut(300).addClass('hid');};
	});
}

function sort() {
	var a_sort = new Array();
	switch ($('#sort').val()){
		case 'По названию' :
			a_sort = a_i.sort();break;
		case 'По возрастанию цены' :
			a_sort = a_i.sort(SortS).reverse();break;
		case 'По убыванию цены' :
			a_sort = a_i.sort(SortS);break;
		case 'По возрастанию площади' :
			a_sort = a_i.sort(SortS).reverse();break;
		case 'По убыванию площади' :
			a_sort = a_i.sort(SortS);break;
	}
	$(a_sort).each(function (){
		$('#proekts').prepend($('#block_proekt[data-dir='+this+']'));
	});
}

if (typeof(dirs) !== "undefined") {
var min_s=+dirs['73-245'][0];var max_s=+dirs['73-245'][0];
$.each(dirs, function(i,a) {
	if (min_s>+a[0]) {min_s=+a[0];}
	if (max_s<+a[0]) {max_s=+a[0];}
} );
var min_c=min_s*15000;var max_c=max_s*15000;
var form = {'slider1':[min_c+' ',max_c+' '],'slider2':[min_s+' ',max_s+' '],'checkbox':[],'col-et':'Не имеет значение','arch-st':'Не имеет значение'};
var a_i = Object.keys(dirs);

$("#slider1").noUiSlider({
	start: [min_c, max_c],
	connect: true,
	step: 100000,
	range: {
		'min': min_c,
		'max': max_c
	},
	format: wNumb({decimals: 0, thousand: ' '})
});
$("#slider1").Link('lower').to($('#input1'));
$("#slider1").Link('upper').to($('#input2'));
$("#slider2").noUiSlider({
	start: [min_s, max_s],
	connect: true,
	step: 10,
	range: {
		'min': min_s,
		'max': max_s
	},
	format: wNumb({decimals: 0, thousand: ' '})
});
$("#slider2").Link('lower').to($('#input3'));
$("#slider2").Link('upper').to($('#input4'));

/*$(window).scroll;
$(window).scroll(function () {
	var scroll = $(this).scrollTop(),
		top = $('#project-fixed').parent().offset().top,
		bottom = $('.article').offset().top - $(window).height(),
		hide = top + $('#project-fixed').height() - $(window).height();
		result=$('#project-fixed').css('bottom');
	if (scroll<top-100) {result=scroll-50;}
		else if (scroll>bottom+top-100) {result=scroll-bottom;}
			else {result=top-100;}
	$('#project-fixed').css('bottom',result+'px');
});*/
$( document ).ready(function() {
	update_proekts();
	$('input, select, #slider1, #slider2').bind('change keyup set',function (){
		if ($(this).attr('id')=='sort') {sort();}
		else {
			re = /input/;if (!re.test(form[$(this).attr('id')])) {form[$(this).attr('id')] = $(this).val();}
			if ($(this).attr('id')=='col-et') {form['col-et'] = $(this).val();}
			if ($(this).attr('id')=='arch-st') {form['arch-st'] = $(this).val();}
			if ($(this).attr('type')=='checkbox') {if ($(this).prop("checked")){form['checkbox'].push($(this).attr('data_val'));}
				else {form['checkbox'].splice( $.inArray($(this).attr('data_val'), form['checkbox']), 1 );}}
			update_proekts();
		}
	});
});
}