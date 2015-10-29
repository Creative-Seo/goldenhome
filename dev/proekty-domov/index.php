<?php $title = 'Проекты домов и коттеджей во Владимире - каталог готовых проектов с фотографиями';?>
<?php $description = 'Каталог готовых проектов домов и коттеджей из газобетона с фотографиями во Владимире и Иваново от проектной организации Golden Home';?>
<?php $keywords = 'проекты домов, проект дома под ключ, проекта дома под ключ цена, проекты одноэтажных домов, проекты домов из газобетона, проект строительства дома, проект двухэтажного дома, фото';?>
<?php
$root = '../';
$breadcrumb = 'Проекты домов';
$dirs = array ();
?>
<?php include($root."blocks/meta.php"); ?>
<?php include($root."blocks/header.php"); ?>
<div class="container projects">

	<h1 class="h1">Каталог проектов загородных домов и коттеджей</h1>
	<p><a href="/obrazec-proekta/" style="padding: 10px 15px;">Образец проекта дома</a></p>
<div class="row">
	<div class="col-md-3 col-lg-3 project-fixed1" id="project-fixed1">
	<div class="row">
		<div class="col-md-11 col-lg-10" style="margin-bottom:20px;"><div class="row">
			<div class="col-sm-4 col-md-12 col-sm-offset-2 col-md-offset-0"><label>Поиск по номеру проекта: </label></div>
			<div class="col-sm-4 col-md-12 col-lg-11"><input type="text" id="text" class="form-control" placeholder="Введите номер проекта"></div>
		</div></div>
		<div class="col-md-11 col-lg-10"><div class="row">
			<div class="col-sm-6 col-md-12 form-inline input text-center"><label>Цена строительства, руб.: </label>
				<div id="slider1"></div><input id="input1" class="form-control"> &mdash; <input id="input2" class="form-control">
			</div>
			<div class="col-sm-6 col-md-12 form-inline input text-center"><label>Общая площадь, м<sup>2</sup>: </label>
				<div id="slider2"></div><input id="input3" class="form-control"> &mdash; <input id="input4" class="form-control">
			</div>
		</div></div>
		<div class="col-sm-3 col-sm-offset-2 col-md-9 col-md-offset-0">
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
			<label>Сортировать по: </label>
			<select class="form-control" id="sort">
				<option>Названию</option>
				<option>Возрастанию цены</option>
				<option>Убыванию цены</option>
				<option>Возрастанию площади</option>
				<option>Убыванию площади</option>
			</select>
		</div>
		<div class="col-sm-3 col-sm-offset-3 col-md-9 col-md-offset-0"><label>Дополнительно: </label>
			<div class="checkbox"><label><input type="checkbox" id="cb1" data_val="Гараж"> Гараж</label></div>
			<div class="checkbox"><label><input type="checkbox" id="cb2" data_val="Мансарда"> Мансарда</label></div>
			<div class="checkbox"><label><input type="checkbox" id="cb3" data_val="Терраса"> Терраса</label></div>
			<div class="checkbox"><label><input type="checkbox" id="cb4" data_val="Веранда"> Веранда</label></div>
			<div class="checkbox"><label><input type="checkbox" id="cb5" data_val="Цокольный этаж"> Цокольный этаж</label></div>
		</div>
	</div>
	</div>
	
	<div class="col-md-9 col-lg-9">
		<a href="javascript:void(0);" class="akciya-hover" id="kotel"><div class="akciya sample shadow-z-2">
			<div class="akciya-red-small akciya-left hidden-xs">Акция</div>
			<p class="akciya-text">Двухконтурный отопительный котел в <span class="akciya-prize">подарок</span></p>
			<div class="akciya-red-small akciya-right hidden-xs">Акция</div>
		</div></a>
		<div class="row" id="proekts" itemtype="http://schema.org/ItemList" itemscope>
<?php
$class_block_proekt = 'col-sm-6 col-md-4 bl-pr';
$scans = scandir('./');
$nameTpl = '/proekt-/';
if (false !== $scans) {
    $scan = preg_grep($nameTpl, $scans);
	krsort($scan);
	foreach($scan as $row){include($row."/block.php");}
}
?>
		</div>
	</div>
</div>
	<article class="article">
          <h2>Проекты домов и коттеджей из газоблоков под ключ</h2>
          <p>Проектная организация Golden Home имеет большой опыт в&nbsp;разработке типовых и&nbsp;индивидуальных проектов загородных домов, коттеджей и&nbsp;дач. Многие из&nbsp;этих разработок уже реализованы во&nbsp;Владимирской, Ивановской, Московской и&nbsp;других областях России. Проекты домов, разработанные в&nbsp;соответствии с&nbsp;требованиями технологии и&nbsp;типовыми характеристиками, могут быть не&nbsp;раз использованы для строительства как готовый опробированный материал. Как правило, стоимость готового проекта ниже, чем разработка нового. В&nbsp;то&nbsp;же время это не&nbsp;лишает будущий дом оригинальности и&nbsp;индивидуальности стиля. Владелец может подобрать нужное цветовое решение, дизайн, выбрать материалы, оформление фасада, кровельный материал и&nbsp;спланировать ландшафт, опираясь на&nbsp;готовый проект дома.</p>
          <p>Проекты домов из&nbsp;газоблоков предполагают использование в&nbsp;процессе возведения здания простого и&nbsp;доступного материала&nbsp;— блоков из&nbsp;газобетона, которые позволяют увеличить интенсивность строительства. Кроме того, такие проекты особенно популярны на&nbsp;рынке строительных услуг и&nbsp;поэтому являются самыми быстрыми и&nbsp;доступными программами частного строительства. Дома из&nbsp;газоблоков активно набирают популярность, вытесняя с&nbsp;рынка традиционное строительство. Эта технология обладает рядом бесспорных преимуществ. Дизайн дома, построенного по&nbsp;этой технологии, может быть настолько разнообразным, насколько пожелает будущий владелец. Строительство из газобетона позволяет моделировать различные варианты оформления сводов дома и&nbsp;фасадной части. Также, подобное строительство&nbsp;— это быстрый и&nbsp;экономичный способ возвести частный дом.</p>
          <h2>Что входит в состав проекта?</h2>
          <p>Проекты коттеджей включают в&nbsp;себя необходимые чертежи, расчеты и&nbsp;детализированную 3d&nbsp;модель дома. В&nbsp;компьютерной визуализации отлично передан дизайн котеджа, показана планировка дома и&nbsp;переданы элементы фасадной и&nbsp;внутренней конструкции. Компьютерная модель выступает в&nbsp;качестве основы проекта, потому что помогает представить в&nbsp;деталях будущую планировку, дизайн дома и&nbsp;его функционал. Большая часть визуализаций представляет также систему коммуникаций дома, месторасположение центральных узлов водопровода, канализации и&nbsp;отопительной системы. Такие подробные модели позволяют заранее определить комплекс работ, которые нужно будет выполнить, чтобы полностью подключить дом к&nbsp;коммуникациям и&nbsp;подготовить к&nbsp;сдаче.</p>
          <p>Наша компания предлагает клиентам индивидуальные и&nbsp;типовые проекты домов из&nbsp;газоблоков под ключ. Типовой проект гораздо дешевле индивидуальной разработки, что, несомненно, является положительным фактором. Каждый проект подкрепляется нормативной документацией, в&nbsp;которой прописана планировка дома и&nbsp;указаны схемы коммуникаций. Мы&nbsp;поможем Вам подобрать наиболее подходящий готовый проект под ваши потребности и&nbsp;финансовые возможности.</p>
          <h2>Как выбрать проект?</h2>
          <p>Выбор проекта вашего будущего - важный этап, от которого зависит ваш уют и комфорт проживания в доме.</p>
          <h3>Материал стен</h3>
          <p>Если вы планируете жить в доме постоянно, то предпочтительно выбрать газобетон.</p>
          <h3>Количество этажей</h3>
          <p>Самый распространенный вариант - два этажа, один из которых мансардный. Для семьи с пожилыми людьми рекомендуется одноэтажный проект. Если у вас небольшой участок, то одноэтажный дом не рекомендуется, так как займет большую площадь.</p>
          <h3>Площадь дома</h3>
          <p>Для семьи из 3 - 4 человек хватит площади 120 - 180 кв.м. Но возможно увеличить площадь дома по желанию заказчика.</p>
          <h3>Количество комнат</h3>
          <p>Комнат должно быть с учетом гостей.</p>
          
          <ul class="nav nav-pills">
             <li><a href="dvuhetazhnye-s-garazhom/">Проекты двухэтажных домов с гаражом</a></li>
             <li><a href="so-vtorym-svetom/">Проекты домов со вторым светом</a></li>
             <li><a href="s-ploskoy-kryshey/">Проекты домов с плоской крышей</a></li>
             <li><a href="s-panoramnymi-oknami/">Проекты домов с панорамными окнами</a></li>
             <li><a href="s-dvuhskatnoy-kryshey/">Проекты домов с двухскатной крышей</a></li>
             <li><a href="s-chetyrehskatnoy-kryshey/">Проекты домов с четырехскатной крышей</a></li>
             <li><a href="s-valmovoy-kryshey/">Проекты домов с вальмовой крышей</a></li>
             <li><a href="s-chetyrmya-spalnyami/">Проекты домов с четырьмя спальнями</a></li>
             <li><a href="s-tremya-spalnyami/">Проекты домов с тремя спальнями</a></li>
             <li><a href="s-dvumya-spalnyami/">Проекты домов с двумя спальнями</a></li>
          </ul>
		  <hr>
		  <ul class="nav nav-pills grey">
            <li><a href="odnoetazhnye/">Проекты одноэтажных домов</a></li>
            <li><a href="dvuhetazhnye/">Проекты двухэтажных домов</a></li>
            <li><a href="trehetazhnye/">Проекты трехэтажных домов</a></li>
            <li><a href="s-garazhom/">Проекты домов с гаражом</a></li>
            <li><a href="nebolshie/">Проекты до 150 м2</a></li>
            <li><a href="srednie/">Проекты до 250 м2</a></li>
            <li><a href="bolshie/">Свыше 250 м2</a></li>
            <li><a href="luchshie/">Лучшие</a></li>
            <li><a href="sovremennye/">Современные</a></li>
            <li><a href="s-mansardoy/">С мансардой</a></li>
            <li><a href="s-terrasoy/">С террасой</a></li>
            <li><a href="s-verandoy/">С верандой</a></li>
            <li><a href="s-cokolnym-etazhom/">С цокольным этажом</a></li>
            <li><a href="shale/">Шале</a></li>
            <li><a href="high-tech/">Хай тек</a></li>
            <li><a href="classic/">Классика</a></li>
            <li><a href="fahverk/">Фахверк</a></li>
            <li><a href="iz-penoblokov/">Проекты домов из пеноблоков</a></li>
            <li><a href="iz-gazobetona/">Проекты домов из газобетона</a></li>
	</ul>
    </article>
</div>

<script>var dirs = JSON.parse('<?php $dirs =json_encode($dirs, JSON_UNESCAPED_UNICODE); echo $dirs;?>');</script>
<?php include($root."blocks/footer.php");?>