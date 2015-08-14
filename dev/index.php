<?php $title = 'Golden Home';?>
<?php $root = '';
include($root."blocks/meta.php");
include($root."array.php");?>
<div class="homepage">

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

	<div style="z-index:-2; opacity:0; background-image: url(/img/Stroitelstvo_Slayd.jpg)" class="fons prodazha-domov"></div>
	<div style="z-index:-2; opacity:0; background-image: url(/img/Dizayn_interyera_Slayd.jpg)" class="fons dizayn-interyera"></div>
	<div style="z-index:-2; opacity:0; background-image: url(/img/Gazobloki_Slayd.jpg)" class="fons gazobloki"></div>
	<div style="z-index:-2; opacity:0; background-image: url(/img/Proekty_domov_Slayd.jpg)" class="fons proekty-domov"></div>
	<div style="z-index:-1; opacity:1; background-image: url(/img/Prodazha_domov_Slayd.jpg)" class="fons stroitelstvo"></div>
<div class="footer_shadow" style="bottom: 0px;"></div>
</section>
<div class="shadow"></div>

<?php include($root."blocks/header.php"); ?>

<div class="container child hidden-sm hidden-xs">
	<div class="jumbotron"><p><span>Более 100</span> построенных <br> домов</p></div>
</div>

<div class="container center-block" id="icons">
    <ul class="nav nav-pills nav-justified">
		<li class="action">
			<a href="/stroitelstvo/" data-pointer="stroitelstvo">
				<img src="/img/Stroitelstvo_Ikonka.png" alt="">
				<p class="text">Cтроительство</p>
			</a>
		</li>
		<li>
			<a href="/proekty-domov/" data-pointer="proekty-domov">
				<img src="/img/Proekty_domov_Ikonka.png" alt="">
				<p class="text">Проекты домов</p>
			</a>
		</li>
		<li>
			<a href="/kupit-dom/" data-pointer="prodazha-domov">
				<img src="/img/Prodazha_domov_Ikonka.png" alt="">
				<p class="text">Продажа домов</p>
			</a>
		</li>
		<li>
			<a href="/dizayn-interera/" data-pointer="dizayn-interyera">
				<img src="/img/Dizayn_interyera_Ikonka.png" alt="">
				<p class="text">Дизайн интерьера</p>
			</a>
		</li>
		<li>
			<a href="/gazobloki/" data-pointer="gazobloki">
				<img src="/img/Gazobloki_Ikonka.png" alt="">
				<p class="text">Газоблоки</p>
			</a>
		</li>
	</ul>
</div>




<?php include($root."blocks/footer.php");?>
</div>
</body>
</html>