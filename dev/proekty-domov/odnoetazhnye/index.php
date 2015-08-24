<?php $title = 'Проекты одноэтажных домов и коттеджей - продажа проектов';?>
<?php $description = 'Проекты одноэтажных домов с продуманным размещением помещений - комфортны для проживания семьи любого состава. В этом разделе сайта вы сможете подобрать проект одноэтажного дома площадью от 20 до 250 кв.м., с гаражом на 1автомобиль и даже подвалом';?>
<?php $keywords = 'проекты домов, проекты коттеджей, проект дома под ключ, проекта дома под ключ цена, проекты одноэтажных домов, проекты домов из газобетона, проект строительства дома';?>
<?php $breadcrumb = 'Проекты одноэтажных домов';?>
<?php $breadcrumb2 = 'Проекты домов';?>
<?php $root = '../../';
include($root."blocks/meta.php"); 
include($root."blocks/header.php");?>

<div class="container">

          <h1>Проекты одноэтажных домов – дача, коттедж, загородный дом</h1>
	<div class="row" id="proekts" itemtype="http://schema.org/ItemList" itemscope>
<?php $class_block_proekt = 'col-sm-6 col-md-3 bl-pr';
include("../proekt-26-159/block.php");
include("../proekt-15-240/block.php");
include("../proekt-69-118/block.php");?>
    </div>
</div>
<?php include($root."blocks/footer.php");?>