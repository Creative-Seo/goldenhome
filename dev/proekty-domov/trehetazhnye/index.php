<?php $title = 'Проекты трехэтажных домов';?>
<?php $description = 'Проекты трехэтажных домов от компании Golden Home';?>
<?php $keywords = 'проекты трехэтажных домов, проекты трехэтажных коттеджей, проект дома под ключ, проекта дома под ключ цена, проекты двухэтажных домов, проекты домов из газобетона, проект строительства дома, проект двухэтажного дома';?>
<?php $breadcrumb = 'Проекты трехэтажных домов';?>
<?php $breadcrumb2 = 'Проекты домов';?>
<?php $root = '../../';
include($root."blocks/meta.php"); 
include($root."blocks/header.php");?>

<div class="container">

          <h1>Проекты трехэтажных домов</h1>
	<div class="row" id="proekts" itemtype="http://schema.org/ItemList" itemscope>
<?php $class_block_proekt = 'col-sm-6 col-md-4 bl-pr';
include("../proekt-53-320/block.php");
include("../proekt-40-325/block.php");
include("../proekt-04-295/block.php");
include("../proekt-01-300/block.php");?>
    </div>
</div>
<?php include($root."blocks/footer.php");?>