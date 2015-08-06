<?php $title = 'Проекты больших домов с большими окнами для семьи, проекты больших коттеджей с верандой, террасой, гостинной';?>
<?php $description = 'Проекты больших домов с большими окнами для семьи, проекты больших коттеджей с верандой, террасой, гостинной от компании Golden Home';?>
<?php $keywords = 'Проекты больших домов, Проекты домов с большими окнами, проект дома под ключ, проекта дома под ключ цена, проекты двухэтажных домов, проекты домов из газобетона, проект строительства дома, проект двухэтажного дома';?>
<?php $breadcrumb = 'Площадью свыше 250 м2';?>
<?php $breadcrumb2 = 'Проекты домов';?>
<?php $root = $_SERVER['DOCUMENT_ROOT'];
include($root."/blocks/meta.php"); 
include($root."/blocks/header.php");?>

<div class="container">
<?php include($root."/blocks/breadcrumbs.php");?>
    <h1>Большой дом для большой семьи</h1>
	<div class="row" id="proekts" itemtype="http://schema.org/ItemList" itemscope>
                    <?php include("../proekt-65-259/block.php");?>
                    <?php include("../proekt-53-320/block.php");?>
                    <?php include("../proekt-48-255/block.php");?>
                    <?php include("../proekt-40-325/block.php");?>
                    <?php include("../proekt-12-260/block.php");?>
                    <?php include("../proekt-07-353/block.php");?>
                    <?php include("../proekt-04-295/block.php");?>
                    <?php include("../proekt-01-300/block.php");?>
    </div>
</div>
<?php include($root."/blocks/footer.php");?>