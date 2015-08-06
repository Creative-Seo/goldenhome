<?php $title = 'Проекты трехэтажных домов';?>
<?php $description = 'Проекты трехэтажных домов от компании Golden Home';?>
<?php $keywords = 'проекты трехэтажных домов, проекты трехэтажных коттеджей, проект дома под ключ, проекта дома под ключ цена, проекты двухэтажных домов, проекты домов из газобетона, проект строительства дома, проект двухэтажного дома';?>
<?php $breadcrumb = 'Проекты трехэтажных домов';?>
<?php $breadcrumb2 = 'Проекты домов';?>
<?php $root = $_SERVER['DOCUMENT_ROOT'];
include($root."/blocks/meta.php"); 
include($root."/blocks/header.php");?>

<div class="container">
<?php include($root."/blocks/breadcrumbs.php");?>
          <h1>Проекты трехэтажных домов</h1>
	<div class="row" id="proekts" itemtype="http://schema.org/ItemList" itemscope>
                    <?php include("../proekt-53-320/block.php");?>
                    <?php include("../proekt-40-325/block.php");?>
                    <?php include("../proekt-04-295/block.php");?>
                    <?php include("../proekt-01-300/block.php");?>
    </div>
</div>
<?php include($root."/blocks/footer.php");?>