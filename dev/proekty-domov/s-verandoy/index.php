<?php $title = 'Проекты домов и коттеджей с верандой';?>
<?php $description = 'Проекты домов и коттеджей с верандой от компании Golden Home';?>
<?php $keywords = 'проекты домов с верандой, проекты коттеджей с верандой, проект дома под ключ, проекта дома под ключ цена, проекты двухэтажных домов, проекты домов из газобетона, проект строительства дома, проект двухэтажного дома';?>
<?php $breadcrumb = 'С верандой';?>
<?php $breadcrumb2 = 'Проекты домов';?>
<?php $root = '../../';
include($root."blocks/meta.php"); 
include($root."blocks/header.php");?>

<div class="container">

          <h1>Проекты домов с верандой</h1>
	<div class="row" id="proekts" itemtype="http://schema.org/ItemList" itemscope>
<?php $class_block_proekt = 'col-sm-6 col-md-4 bl-pr';
include("../proekt-31-250/block.php");
include("../proekt-07-353/block.php");
include("../proekt-23-154/block.php");
include("../proekt-15-240/block.php");?>
    </div>
</div>
<?php include($root."blocks/footer.php");?>