<?php $title = 'Главаная';
	$description = 'Главаная';
	$keywords = 'Главаная';?>
<?php $dirs = array ();?>
<?php
$root = '../';
$breadcrumb = 'Главаная';
include($root."blocks/meta.php"); 
include($root."blocks/header.php"); 
?>

<div class="container home-page">
	<div class="row">
		<div class="col-md-6">
			<div class="home-page_top-text">
				<h1>Строительство домов и коттеджей под ключ</h1>
				<p>Строительство домов под ключ - основное направление деятельности компании Golden Home. Мы строим загородные дома из различных материалов по самым современным технологиям.</p>
				<p>Стоимость строительства дома под ключ из газоблоков составляет сегодня в среднем от 18 500 р./кв.м. Цены на строительство домов и под ключ зависят, прежде всего, от метража, этажности, сложности реализации дизайна, конструкции и планировок, а также от выбора строительных и отделочных материалов.</p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="home-page_top-photo">
				<img src="/image/photo_obj/100.jpg" alt="" class="img-responsive">
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-push-2 home-page_diler">
				<h2>Мы сертифицированные строители Ytong</h2>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 col-md-push-4 home-page_stoimost">
				<h2>Стоимость строительства</h2>
		</div>
	</div>

	<div class="row">
	  <div class="home-page_stoimost_block col-md-12">
		<div class="col-md-6 home-page_stoimost_div">
			<div class="home-page_stoimost_descr">
				<h3>Коттедж с мансардой</h3>
				<div class="home-page_stoimost_block_price h3"><span>15 000</span> руб.кв.м.</div>
				<div class="h3">В стоимость входит:</div>
				<div class="h3">Материал + работа</div>
				<p>Дом из газобетонных блоков YTONG без наружной отделки.
Процесс строительства делится на этапы:</p>
				<ul class="center-block">
					<li>1. Заливка фундамента</li>
					<li>2. Возведение стен и перекрытие плитами</li>
					<li>3. Стеклопакеты REHAU</li>
					<li>4. Перекрытия</li>
					<li>5.Укладка кровли</li>
				</ul>
			</div>
		</div>
		<div class="col-md-6 home-page_stoimost_div">
			<img src="/img/tipovye-doma/mansardnyy-variant.jpg" alt="" class="img-responsive">
		</div>
	  </div>
	</div>

	<div class="row">
	  <div class="home-page_stoimost_block col-md-12">
		
		<div class="col-md-6 home-page_stoimost_div">
			<img src="/img/tipovye-doma/s-polnocennym-vtorym-etazhom.jpg" alt="" class="img-responsive">
		</div>

		<div class="col-md-6 home-page_stoimost_div">
			<div class="home-page_stoimost_descr">
				<h3>Коттедж с полноценным вторым этажом</h3>
				<div class="home-page_stoimost_block_price h3"><span>17 000</span> руб.кв.м.</div>
				<div class="h3">В стоимость входит:</div>
				<div class="h3">Материал + работа</div>
				<p>Дом из газобетонных блоков YTONG без наружной отделки.
Процесс строительства делится на этапы:</p>
				<ul class="center-block">
					<li>1. Заливка фундамента</li>
					<li>2. Возведение стен и перекрытие плитами</li>
					<li>3. Стеклопакеты REHAU</li>
					<li>4. Перекрытия</li>
					<li>5.Укладка кровли</li>
				</ul>
			</div>
		</div>
	  </div>
	</div>

	<div class="row">
		<div class="col-md-6 home-page_stoimost_div">
			<div class="mansarda">
				<img src="/img/tipovye-doma/dom-s-naruzhnoy-otdelkoy.jpg" alt="" class="img-responsive">
			</div>
		</div>
		<div class="col-md-6 home-page_stoimost_div">
			<div class="vtoroy-etaj">
				<img src="/img/tipovye-doma/dom-pod-kluch.jpg" alt="" class="img-responsive">
			</div>
		</div>
	</div>
</div>


<?php include($root."blocks/footer.php");?>
