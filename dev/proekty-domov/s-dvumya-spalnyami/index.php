<?php $title = 'Проекты домов с двумя спальнями, стоимость строительства во Владимире и Иваново';?>
<?php $description = 'Проекты домов и коттеджей с двумя спальнями от компании Golden Home, стоимость строительство во Владимире и Иваново';?>
<?php $keywords = 'Проекты домов с двумя спальнями';?>
<?php $breadcrumb = 'С двумя спальнями';?>
<?php $breadcrumb2 = 'Проекты домов';?>
<?php $root = '../';
include($root."blocks/meta.php"); 
include($root."blocks/header.php");?>

<div class="container">
<?php include($root."blocks/breadcrumbs.php");?>
          <h1>Проекты домов и коттеджей с двумя спальнями</h1>
	<div class="row" id="proekts" itemtype="http://schema.org/ItemList" itemscope>
                    <?php include("../proekt-60-160/block.php");?>
                    <?php include("../proekt-63-186/block.php");?>
                    <?php include("../proekt-67-142/block.php");?>
                    <?php include("../proekt-19-125/block.php");?>
                    <?php include("../proekt-05-146/block.php");?>
    </div>
</div>
<?php include($root."blocks/footer.php");?>