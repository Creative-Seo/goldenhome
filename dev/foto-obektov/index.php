<?php $title = 'Фотографии домов из газобетона от компании Golden Home';?>
<?php $description = 'Фотографии готовых домов из газобетона построенных нашей компанией - Golden Home';?>
<?php $keywords = 'Фотографии объектов';?>
<?php $breadcrumb = 'Фотографии объектов';?>
<?php $root = $_SERVER['DOCUMENT_ROOT'];
include($root."/blocks/meta.php");
include($root."/blocks/header.php");?>

<div class="container">
	<?php include($root."/blocks/breadcrumbs.php"); ?>
  <h1>Фотографии готовых домов из газобетона</h1>
  <p>В галерее представлены фотографии загородных домов построенных нашей компанией. Все дома реализованы по проектам наших архитекторов.</p>

<?php
$photo_dir = '/image/photo_obj/';
$photo_alt = 'Фотография нашего объекта';
$photo_col = 'col-xs-6 col-sm-3 col-lg-2'; 
include($root."/blocks/photo-list.php");
?>
</div>
<?php include($root."/blocks/footer.php");?>