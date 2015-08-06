<?php $title = 'Проекты домов с четырьмя спальнями, стоимость строительства во Владимире и Иваново';?>
<?php $description = 'Проекты домов и коттеджей с четырьмя спальнями от компании Golden Home, стоимость строительство во Владимире и Иваново';?>
<?php $keywords = 'Проекты домов с четырьмя спальнями';?>
<?php $breadcrumb = 'С четырьмя спальнями';?>
<?php $breadcrumb2 = 'Проекты домов';?>
<?php $root = $_SERVER['DOCUMENT_ROOT'];
include($root."/blocks/meta.php"); 
include($root."/blocks/header.php");?>

<div class="container">
<?php include($root."/blocks/breadcrumbs.php");?>
          <h1>Проекты домов и коттеджей с четырьмя спальнями</h1>
	<div class="row" id="proekts" itemtype="http://schema.org/ItemList" itemscope>
                    <?php include("../proekt-59-183/block.php");?>
                    <?php include("../proekt-57-212/block.php");?>
                    <?php include("../proekt-66-215/block.php");?>
                    <?php include("../proekt-58-120/block.php");?>
                    <?php include("../proekt-50-110/block.php");?>
                    <?php include("../proekt-17-115/block.php");?>
                    <?php include("../proekt-16-140/block.php");?>
    </div>
</div>
<?php include($root."/blocks/footer.php");?>