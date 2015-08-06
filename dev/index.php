<?php $title = 'Golden Home';?>
<?php $style = '<link rel="stylesheet" href="css/index.css">';?>
<?php $root = $_SERVER['DOCUMENT_ROOT'];?>
<?php include($root."/blocks/meta.php"); ?>
<?php include($root."/array.php");?>
<section id="wrapper">
<div id="mouse-scroll" class="ng-scope">
	<div class="mouse">
	<div class="wheel"></div>
	</div>
	<div>
	<span class="unu"></span>
	<span class="doi"></span>
	<span class="trei"></span>
	</div>
</div>
  <div id="setka"></div>
	<div style="z-index:-2; opacity:1; background-color:#779" class="fons"></div>

	<div style="z-index:-2; opacity:0; background-image: url(../img/Stroitelstvo_Slayd.jpg)" class="fons prodazha-domov"></div>
	<div style="z-index:-2; opacity:0; background-image: url(../img/Dizayn_interyera_Slayd.jpg)" class="fons dizayn-interyera"></div>
	<div style="z-index:-2; opacity:0; background-image: url(../img/Gazobloki_Slayd.jpg)" class="fons gazobloki"></div>
	<div style="z-index:-2; opacity:0; background-image: url(../img/Proekty_domov_Slayd.jpg)" class="fons proekty-domov"></div>
	<div style="z-index:-1; opacity:1; background-image: url(../img/Prodazha_domov_Slayd.jpg)" class="fons stroitelstvo"></div>
<div class="footer_shadow" style="bottom: 0px;"></div>
</section>
<div class="shadow"></div>

<?php include($root."/blocks/header.php"); ?>
 <!--content-->
<div class="container child hidden-sm hidden-xs">
	<div class="jumbotron"><p><span>Более 100</span> построенных <br> домов</p></div>
</div>
<div class="container center-block" id="icons">
    <ul class="nav nav-pills nav-justified">
		<li class="action">
			<a href="/stroitelstvo/" data-pointer="stroitelstvo">
				<img src="img/Stroitelstvo_Ikonka.png" alt="">
				<p class="text">Cтроительство</p>
			</a>
		</li>
		<li>
			<a href="/proekty-domov/" data-pointer="proekty-domov">
				<img src="img/Proekty_domov_Ikonka.png" alt="">
				<p class="text">Проекты домов</p>
			</a>
		</li>
		<li>
			<a href="/kupit-dom/" data-pointer="prodazha-domov">
				<img src="img/Prodazha_domov_Ikonka.png" alt="">
				<p class="text">Продажа домов</p>
			</a>
		</li>
		<li>
			<a href="/dizayn-interera/" data-pointer="dizayn-interyera">
				<img src="img/Dizayn_interyera_Ikonka.png" alt="">
				<p class="text">Дизайн интерьера</p>
			</a>
		</li>
		<li>
			<a href="/gazobloki/" data-pointer="gazobloki">
				<img src="img/Gazobloki_Ikonka.png" alt="">
				<p class="text">Газоблоки</p>
			</a>
		</li>
	</ul>
</div>


<div class="container article content">
   <div class="row">
       <h1 class="h1">Строительство домов и коттеджей под ключ</h1>
       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
       	<p>Строительство домов под ключ - основное направление деятельности компании Golden Home. Мы строим загородные дома из различных материалов по самым современным технологиям.</p>
       	<p>Стоимость строительства дома под ключ из газоблоков составляет сегодня в среднем от 18 500 р./кв.м. Цены на строительство домов и под ключ зависят, прежде всего, от метража, этажности, сложности реализации дизайна, конструкции и планировок, а также от выбора строительных и отделочных материалов.</p>
       </div>
       <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
        <p>Строительная компания Golden Home является аккредитованным партнером по строительству с использованием технологии YTONG и первая среди других строительно-монтажных организаций Владимирской области начала применять в строительстве блоки YTONG. В настоящее время специалисты компании занимаются строительством индивидуальных малоэтажных домов и коттеджей любой степени сложности. Строительная фирма Golden Home выполнит работы по возведению Вашего дома, а также весь комплекс сопутствующих работ: выезд специалиста на участок, проектирование, возведение фундамента, внутренняя и внешняя отделка. Команда специалистов компании поможет реализовать Ваши идеи с учетом индивидуальных предпочтений.</p>
       </div>
   </div><!-- row -->
</div><!-- container -->

<div class="container article">
   <div class="row">
     <h2 class="h2">Типовые решения</h2> 
     <div role="tabpanel">

  <!-- Nav tabs -->
  <ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active tippr"><a href="#home" aria-controls="home" role="tab" data-toggle="tab">Мансардный вариант<br><span>1 500 000</span> руб.</a>

    </li>
    <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab">С полноценным 2-м этажом</a></li>
    <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Дом по цене однокомнатной квартиры</a></li>
    <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab">Стоимость до 2250000 руб.</a></li>
  </ul>

  <!-- Tab panes -->
  <div class="tab-content">
    <div role="tabpanel" class="tab-pane active" id="home"><div class="col-md-8"><img src="img/mans.jpg" alt="" class="img-responsive"></div></div>
    <div role="tabpanel" class="tab-pane" id="profile">...</div>
    <div role="tabpanel" class="tab-pane" id="messages">...</div>
    <div role="tabpanel" class="tab-pane" id="settings">...</div>
  </div>

</div>
   </div><!-- row -->
</div><!-- container -->

<link href="css/work.css" rel="stylesheet">

<?php include("blocks/footer.php");?>
<script>
var img='#wrapper .stroitelstvo';
var a = {'stroitelstvo' : '<p><span>Более 100</span> построенных<br> домов</p>',
		'proekty-domov' : '<p><span>Наши проекты</span> всегда высокого<br> качества</p>',
		'prodazha-domov' : '<p><span>Огромный выбор</span><br> самых разных<br> построек</p>',
		'dizayn-interyera' : '<p><span>Мы</span><br> осуществим<br> вашу мечту</p>',
		'gazobloki' : '<p><span>Сопутствующие товары</span><br> и многое другое</p>'};
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
</script>
  </body>
</html>