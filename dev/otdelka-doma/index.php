<?php $title = 'Отделочные работы от компании Golden Home: отделка квартиры во Владимире, ремонт коттеджей, дизайн интерьера выполнят высококвалифицированные специалисты';?>
<?php $description = 'Отделочные работы - завершающий этап ремонта дома, квартиры. Отделка квартиры во Владимире, дизайн интерьера выполнят квалифицированные специалисты';?>
<?php $keywords = 'ремонт квартиры, отделочные работы во владимире, ремонт дома, ремонт коттеджей, отделка квартир, дизайн интерьера, отделка дома, внутренняя отделка, отделка квартир';?>
<?php $breadcrumb = 'Отделочные работы';?>
<?php $root = $_SERVER['DOCUMENT_ROOT'];
include($root."/blocks/meta.php");
include($root."/blocks/header.php");?>

<div class="container">
	<?php include($root."/blocks/breadcrumbs.php"); ?>
  <h1>Отделочные работы</h1>
  <p>Специалисты компании Golden Home выполнят для Вас внутренние отделочные работы и ремонт в частных домах, квартирах, офисах. Мы не пасуем ни перед какими сложностями и готовы работать с любым бюджетом. Более подробную информацию спрашивайте по телефонам (4922) 37-07-51, (920) 925-99-97.</p>

<?php 
$photo_dir = '/image/design_int2/';
$photo_alt = 'Фотография интерьера';
$photo_col = 'col-xs-6 col-sm-3 col-lg-2'; 
include($root."/blocks/photo-list.php");
?>
<?php 
$photo_dir = '/image/remont/';
$photo_alt = 'Фотография ремонта';
$photo_col = 'col-xs-6 col-sm-3 col-lg-2'; 
include($root."/blocks/photo-list.php");
?>

</div>
<?php include($root."/blocks/footer.php");?>