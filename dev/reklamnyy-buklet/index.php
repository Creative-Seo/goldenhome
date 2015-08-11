<?php $title = 'Рекламный буклет «Golden Home»';?>
<?php $description = 'Рекламный буклет «Golden Home», рекламные материалы компании Golden Home';?>
<?php $keywords = 'Рекламный буклет «Golden Home»';?>
<?php $breadcrumb = 'Рекламный буклет';?>
<?php $root = '../';
include($root."blocks/meta.php");
include($root."blocks/header.php");?>

<div class="container">
	<?php include($root."blocks/breadcrumbs.php"); ?>
     <h1>Рекламный буклет «Golden Home»</h1>
	<div class="row">
		<div class="col-xs-6 col-md-4">
          <div class="visual">
            <a href="/image/magazine/booklet/big.jpg" rel="jquery-lightbox"><img src="/image/magazine/booklet/small.jpg" alt="Фотография журнала"></a>
          </div>
          <p><b>Рекламный буклет</b></p>
          <div class="buttons-row">
            <a href="/image/magazine/booklet/golden_home_booklet.zip" class="button download" title="Скачать журнал">Загрузить</a>
            <a href="/image/magazine/booklet/golden_home_booklet.pdf" class="button" target="_blank" title="Смотреть журнал">Листать журнал</a>
          </div>
        </div>
	</div>
</div>
<?php include($root."blocks/footer.php");?>