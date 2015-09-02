<?php $title = 'Межрегиональная выставка «СтройПрогресс»';?>
<?php $description = '';?>
<?php $keywords = '';?>
<?php $breadcrumb = 'СТРОЙПРОГРЕСС';?>
<?php $root = '../../';
include($root."blocks/meta.php"); 
include($root."blocks/header.php");?>

<div class="container">
  <h1 class="h1_small">12-14 февраля 2014 XVI МЕЖРЕГИОНАЛЬНАЯ ВЫСТАВКА «СТРОЙПРОГРЕСС»</h1>
  <p>С&nbsp;12&nbsp;по&nbsp;14&nbsp;февраля 2014 года компания ООО &laquo;Голден Хоум&raquo; приняла участие в&nbsp;XVI&nbsp;МЕЖРЕГИОНАЛЬНОЙ ВЫСТАВКЕ &laquo;СТРОЙПРОГРЕСС&raquo; во&nbsp;Владимирском Экспоцентре.</p>
  <p>В&nbsp;ходе выставки были продемонстрированы лучшие технологии <a href="/stroitelstvo/">строительства</a> из&nbsp;<a href="/gazobloki/">газобетона</a>, представлены для продажи готовые объекты коттеджей и&nbsp;индивидуальных домов.</p>
<?php
$photo_dir = '/image/reports/stroiprogress2014/';
$photo_alt = 'Фотография с мероприятия';
$photo_col = 'col-xs-6 col-sm-3 col-lg-2'; 
include($root."blocks/photo-list.php");
?>
</div>
<?php include($root."blocks/footer.php");?>