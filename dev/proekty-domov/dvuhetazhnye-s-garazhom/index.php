<?php $title = 'Проекты двухэтажных домов с гаражом, цены, фото';?>
<?php $description = 'Проекты двухэтажных домов и коттеджей с гаражом от компании Golden Home, стоимость строительство во Владимире и Иваново';?>
<?php $keywords = 'проекты домов с гаражом, проекты коттеджей с гаражом';?>
<?php $breadcrumb = 'Двухэтажные с гаражом';?>
<?php $breadcrumb2 = 'Проекты домов';?>
<?php $root = '../../';
include($root."blocks/meta.php"); 
include($root."blocks/header.php");?>

<div class="container">

    <h1>Проекты двухэтажных домов и коттеджей с гаражом</h1>
	<div class="row" id="proekts" itemtype="http://schema.org/ItemList" itemscope>
<?php $class_block_proekt = 'col-sm-6 col-md-4 bl-pr';
include("../proekt-68-178/block.php");
include("../proekt-55-220/block.php");
include("../proekt-47-248/block.php");
include("../proekt-45-163/block.php");
include("../proekt-18-227/block.php");
include("../proekt-07-353/block.php");?>
</div>
<?php include($root."blocks/footer.php");?>