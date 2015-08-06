<?php $title = 'Проекты домов и коттеджей во Владимире - каталог готовых проектов с фотографиями';?>
<?php $description = 'Каталог готовых проектов домов и коттеджей из газобетона с фотографиями во Владимире и Иваново от проектной организации Golden Home';?>
<?php $keywords = 'проекты домов, проект дома под ключ, проекта дома под ключ цена, проекты одноэтажных домов, проекты домов из газобетона, проект строительства дома, проект двухэтажного дома, фото';?>
<?php
$root = $_SERVER['DOCUMENT_ROOT'];
$breadcrumb = 'Проекты домов';
$dirs = array ();
?>
<?php include($root."/blocks/meta.php"); ?>
<?php include($root."/blocks/header.php"); ?>
<div class="container">
	<?php include($root."/blocks/breadcrumbs.php"); ?>
	<h1 class="h1">Каталог проектов загородных домов и коттеджей</h1>
	<p><a href="http://www.sk-goldenhome.ru/obrazec-proekta/" style="padding: 10px 15px;">Образец проекта дома</a></p>
	
	<div class="row">
		<div class="col-md-4">
		<div class="col-md-12 form-inline input text-center"><label>Цена строительства, руб.: </label>
			<div id="slider1"></div><input id="input1"> &mdash; <input id="input2">
		</div>
		<div class="col-md-12 form-inline input text-center"><label>Общая площадь, м<sup>2</sup>: </label>
			<div id="slider2"></div><input id="input3"> &mdash; <input id="input4">
		</div>
		</div>
		<div class="col-md-4 text-center">
			<label for="form-group">Количество этажей: </label>
			<select class="form-control" id="col-et">
				<option>Не имеет значение</option>
				<option>1</option>
				<option>2</option>
				<option>3</option>
			</select>
			<label>Архитектурный стиль: </label>
			<select class="form-control" id="arch-st">
				<option>Не имеет значение</option>
				<option>классический</option>
				<option>шале</option>
				<option>хай-тек</option>
				<option>фахверк</option>
			</select>
			<label>Сортировка: </label>
			<select class="form-control" id="sort">
				<option>По названию</option>
				<option>По возрастанию цены</option>
				<option>По убыванию цены</option>
				<option>По возрастанию площади</option>
				<option>По убыванию площади</option>
			</select>
		</div>
				<div class="col-md-3"><label>Дополнительно: </label>
			<ul class="list-unstyled">
			<li><input type="checkbox" id="cb1" data_val="Гараж"> Гараж</li>
			<li><input type="checkbox" id="cb2" data_val="Мансарда"> Мансарда</li>
			<li><input type="checkbox" id="cb3" data_val="Терасса"> Терасса</li>
			<li><input type="checkbox" id="cb4" data_val="Веранда"> Веранда</li>
			<li><input type="checkbox" id="cb5" data_val="Цокольный этаж"> Цокольный этаж</li>
			<ul>
		</div>
	</div>
	
	<div class="row" id="proekts" itemtype="http://schema.org/ItemList" itemscope>
<?php
$scans = scandir('./');
$nameTpl = '/proekt-/';
if (false !== $scans) {
    $scan = preg_grep($nameTpl, $scans);
	krsort($scan);
	foreach($scan as $row){include($row."/block.php");}
}
?>
	</div>
	<article class="article">
          <h2>Проекты домов и коттеджей из газоблоков под ключ</h2>
          <p>Проектная организация Golden Home имеет большой опыт в&nbsp;разработке типовых и&nbsp;индивидуальных проектов загородных домов, коттеджей и&nbsp;дач. Многие из&nbsp;этих разработок уже реализованы во&nbsp;Владимирской, Ивановской, Московской и&nbsp;других областях России. Проекты домов, разработанные в&nbsp;соответствии с&nbsp;требованиями технологии и&nbsp;типовыми характеристиками, могут быть не&nbsp;раз использованы для строительства как готовый апробированный материал. Как правило, стоимость готового проекта ниже, чем разработка нового. В&nbsp;то&nbsp;же время это не&nbsp;лишает будущий дом оригинальности и&nbsp;индивидуальности стиля. Владелец может подобрать нужное цветовое решение, дизайн Площадьа, выбрать материалы, оформление фасада, черепицу и&nbsp;спланировать ландшафт, опираясь на&nbsp;готовый проект дома.</p>
          <p>Проекты домов из&nbsp;газоблоков предполагают использование в&nbsp;процессе возведения здания простого и&nbsp;доступного материала&nbsp;— блоков из&nbsp;газобетона, которые позволяют увеличить интенсивность строительства. Кроме того, такие проекты особенно популярны на&nbsp;рынке строительных услуг и&nbsp;поэтому являются самыми быстрыми и&nbsp;доступными программами частного строительства. Каркасные дома из&nbsp;газоблоков, в&nbsp;свою очередь, также активно набирают популярность, вытесняя с&nbsp;рынка традиционное строительство. Каркасная технология обладает рядом бесспорных преимуществ. Дизайн дома, построенного по&nbsp;этой технологии, может быть настолько разнообразным, насколько пожелает будущий владелец. Каркасное строительство позволяет моделировать различные варианты оформления сводов дома и&nbsp;фасадной части. Также, каркасное строительство&nbsp;— это быстрый и&nbsp;экономичный способ возвести частный дом.</p>
          <h2>Что входит в состав проекта?</h2>
          <p>Проекты коттеджей включают в&nbsp;себя необходимые чертежи, расчеты и&nbsp;детализированную 3d&nbsp;модель дома. В&nbsp;компьютерной визуализации отлично передан дизайн котеджа, показана планировка дома и&nbsp;переданы элементы фасадной и&nbsp;внутренней конструкции. Компьютерная модель выступает в&nbsp;качестве основы проекта, потому что помогает представить в&nbsp;деталях будущую планировку, дизайн дома и&nbsp;его функционал. Большая часть визуализаций представляет также систему коммуникаций дома, месторасположение центральных узлов водопровода, канализации и&nbsp;отопительной системы. Такие подробные модели позволяют заранее определить комплекс работ, которые нужно будет выполнить, чтобы полностью подключить дом к&nbsp;коммуникациям и&nbsp;подготовить к&nbsp;сдаче.</p>
          <p>Наша компания предлагает клиентам индивидуальные и&nbsp;типовые проекты домов из&nbsp;газоблоков под ключ. Типовой проект гораздо дешевле индивидуальной разработки, что, несомненно, является положительным фактором. Каждый проект подкрепляется нормативной документацией, в&nbsp;которой прописана планировка дома и&nbsp;указаны схемы коммуникаций. Мы&nbsp;поможем Вам подобрать наиболее подходящий готовый проект под ваши потребности и&nbsp;финансовые возможности.</p>
          <h2>Как выбрать проект?</h2>
          <p>Выбор проекта вашего будущего важный этап, от которого зависит ваш уют и комфорт проживания в доме.</p>
          <h3>Материал стен</h3>
          <p>Если вы планируете жить в доме постоянно, то предпочтительно выбрать газобетон или кирпич. Эти материалы нежелательно промороживать, так как это может нарушить их структуру. Для временного жилья лучше использовать дерево.</p>
          <h3>Количество этажей</h3>
          <p>Самый распространенный вариант - два этажа, один из которых мансардный. Для семьи с пожилыми людьми рекомендуется одноэтажный проект. Если у вас небольшой участок, то одноэтажный дом не рекомендуется, так как займет большую площадь.</p>
          <h3>Площадь дома</h3>
          <p>Для семьи из 3 - 4 человек хватит площади 120 - 180 кв.м. Большой дом требует больших расходов на освещение и отопление.</p>
          <h3>Количество комнат</h3>
          <p>Комнат должно быть на одну больше чем жильцов в доме.</p>
          
          <ul>
             <li><a href="<?php echo HTTP_URL; ?>dvuhetazhnye-s-garazhom/">Проекты двухэтажных домов с гаражом</a></li>
             <li><a href="<?php echo HTTP_URL; ?>so-vtorym-svetom/">Проекты домов со вторым светом</a></li>
             <li><a href="<?php echo HTTP_URL; ?>s-ploskoy-kryshey/">Проекты домов с плоской крышей</a></li>
             <li><a href="<?php echo HTTP_URL; ?>s-panoramnymi-oknami/">Проекты домов с панорамными окнами</a></li>
             <li><a href="<?php echo HTTP_URL; ?>s-dvuhskatnoy-kryshey/">Проекты домов с двухскатной крышей</a></li>
             <li><a href="<?php echo HTTP_URL; ?>s-chetyrehskatnoy-kryshey/">Проекты домов с четырехскатной крышей</a></li>
             <li><a href="<?php echo HTTP_URL; ?>s-valmovoy-kryshey/">Проекты домов с вальмовой крышей</a></li>
             <li><a href="<?php echo HTTP_URL; ?>s-chetyrmya-spalnyami/">Проекты домов с четырьмя спальнями</a></li>
             <li><a href="<?php echo HTTP_URL; ?>s-tremya-spalnyami/">Проекты домов с тремя спальнями</a></li>
             <li><a href="<?php echo HTTP_URL; ?>s-dvumya-spalnyami/">Проекты домов с двумя спальнями</a></li>
          </ul>
		  <ul class="nav nav-pills grey">
            <li><a href="<?php echo HTTP_URL; ?>odnoetazhnye/">Проекты одноэтажных домов</a></li>
            <li><a href="<?php echo HTTP_URL; ?>dvuhetazhnye/">Проекты двухэтажных домов</a></li>
            <li><a href="<?php echo HTTP_URL; ?>trehetazhnye/">Проекты трехэтажных домов</a></li>
            <li><a href="<?php echo HTTP_URL; ?>s-garazhom/">Проекты домов с гаражом</a></li>
            <li><a href="<?php echo HTTP_URL; ?>nebolshie/">Проекты до 150 м2</a></li>
            <li><a href="<?php echo HTTP_URL; ?>srednie/">Проекты до 250 м2</a></li>
            <li><a href="<?php echo HTTP_URL; ?>bolshie/">Свыше 250 м2</a></li>
            <li><a href="<?php echo HTTP_URL; ?>luchshie/">Лучшие</a></li>
            <li><a href="<?php echo HTTP_URL; ?>sovremennye/">Современные</a></li>
            <li><a href="<?php echo HTTP_URL; ?>s-mansardoy/">С мансардой</a></li>
            <li><a href="<?php echo HTTP_URL; ?>s-terrasoy/">С террасой</a></li>
            <li><a href="<?php echo HTTP_URL; ?>s-verandoy/">С верандой</a></li>
            <li><a href="<?php echo HTTP_URL; ?>s-cokolnym-etazhom/">С цокольным этажом</a></li>
            <li><a href="<?php echo HTTP_URL; ?>shale/">Шале</a></li>
            <li><a href="<?php echo HTTP_URL; ?>high-tech/">Хай тек</a></li>
            <li><a href="<?php echo HTTP_URL; ?>classic/">Классика</a></li>
            <li><a href="<?php echo HTTP_URL; ?>fahverk/">Фахверк</a></li>
            <li><a href="<?php echo HTTP_URL; ?>iz-penoblokov/">Проекты домов из пеноблоков</a></li>
            <li><a href="<?php echo HTTP_URL; ?>iz-gazobetona/">Проекты домов из газобетона</a></li>
	</ul>
    </article>
</div>

<?php include($root."/blocks/footer.php"); $dirs =json_encode($dirs, JSON_UNESCAPED_UNICODE);?>
<link rel="stylesheet" href="css/jquery.nouislider.min.css">
<style>
.input>div{
	width: 80%;
	display: inline-block;
}
.input>input{
	width: 30%;
	margin: 10px;
}
.noUi-horizontal {
	height: 5px;
	margin: 5px;
}
.noUi-horizontal .noUi-handle {
	height: 12px;
}
.noUi-handle:after, .noUi-handle:before {
	top: 0px;
	height: 10px;
}
#proekts .bl-pr{
	margin: 15px 0;
	transition: width 300ms linear;
}
#proekts .hid{
	width: 0;
	padding: 0;
}
</style>
<script src="js/jquery.nouislider.all.min.js"></script>
<script>
var dirs = JSON.parse('<?php echo $dirs;?>');
var min_s=+dirs['73-245'][0];var max_s=+dirs['73-245'][0];
$.each(dirs, function(i,a) {
	if (min_s>+a[0]) {min_s=+a[0];}
	if (max_s<+a[0]) {max_s=+a[0];}
} );
var min_c=min_s*15000;var max_c=max_s*15000;
var form = {'slider1':[min_c+' ',max_c+' '],'slider2':[min_s+' ',max_s+' '],'checkbox':[],'col-et':'Не имеет значение','arch-st':'Не имеет значение'};
var a_i = Object.keys(dirs);

function SortS(a, b) {
  if (dirs[a][0] > dirs[b][0]) return 1;
  if (dirs[a][0] < dirs[b][0]) return -1;
}

function update_proekts() {
	re=new RegExp (form['select1'],"i");
	$('#proekts .bl-pr').each(function (){
		var obj = dirs[$(this).attr('data-dir')];
		var c = true;
		if (!((form['slider1'][0].replace(/\s+/g,'')<=obj[0]*15000)&&(form['slider1'][1].replace(/\s+/g,'')>=obj[0]*15000)&&
			(form['slider2'][0].replace(/\s+/g,'')<=obj[0])&&(+form['slider2'][1].replace(/\s+/g,'')>=obj[0])) ) {c = false;}
		if (!((+(form['col-et']==obj[2])||(form['col-et']=='Не имеет значение'))&&((form['arch-st']==obj[3])||(form['arch-st']=='Не имеет значение')))) {c = false;}
		if (form['checkbox'].length>0) {$.each(form['checkbox'], function(i,v){if ($.inArray(form['checkbox'][i],obj[4])==-1){$('h1').text(form['checkbox'][i]);c = false;}});}
		if (c) {$(this).fadeIn().removeClass('hid');} else {$(this).fadeOut(300).addClass('hid');};
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
		$('#proekts').prepend($('#proekts .bl-pr[data-dir='+this+']'));
	});
}

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
</script>