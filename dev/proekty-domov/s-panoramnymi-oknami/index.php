<?php $title = 'Проекты домов с панорамными (большими) окнами, фото, стоимость строительства во Владимире и Иваново';?>
<?php $description = 'Проекты домов и коттеджей с панорамными (большими) окнами от компании Golden Home, стоимость строительство во Владимире и Иваново';?>
<?php $keywords = 'Проекты домов с панорамными окнами, проекты домов с большими окнами';?>
<?php $breadcrumb = 'С панорамными окнами';?>
<?php $breadcrumb2 = 'Проекты домов';?>
<?php $root = '../../';
include($root."blocks/meta.php"); 
include($root."blocks/header.php");?>

<div class="container">

          <h1>Проекты домов с панорамными окнами</h1>
	<div class="row" id="proekts" itemtype="http://schema.org/ItemList" itemscope>
<?php $class_block_proekt = 'col-sm-6 col-md-4 bl-pr';
include("../proekt-65-259/block.php");
include("../proekt-57-212/block.php");?>
    </div>
</div>
<?php include($root."blocks/footer.php");?>