<?php $title = 'Проект обоснования сметы';?>
<?php $description = 'Пример проекта обоснования сметы на строительство дома';?>
<?php $keywords = 'Проект обоснования сметы';?>
<?php $breadcrumb = 'Проект обоснования сметы';?>
<?php $style = '<style>.fancybox-thumb img:hover {-webkit-transform: none;-moz-transform: none;-o-transform: none;}</style>';?>
<?php $root = $_SERVER['DOCUMENT_ROOT'];
include($root."/blocks/meta.php");
include($root."/blocks/header.php");?>

<div class="container">
	<?php include($root."/blocks/breadcrumbs.php"); ?>
  <h1>Проект обоснования сметы (эскизный проект)</h1>
  <p>Выполним разработку проекта Вашего будущего дома. В проект входят:</p>
  <ul>
    <li>отделочные планы;</li>
    <li>фасады и разрезы;</li>
    <li>спецификации;</li>
    <li>планы перекрытий;</li>
    <li>фундамента и кровли;</li>
    <li>визуализация.</li>
  </ul>
<?php
$photo_title = 'Фотография эскизного проекта';
$photo_alt = 'Фотография эскизного проекта';
$photo_col = 'col-xs-6 col-sm-3 col-lg-2'; 
include($root."/blocks/img-list.php");
?>
</div>

<?php include($root."/blocks/footer.php");?>