<?php $title = 'Проекты домов со вторым светом, цены, фото, стоимость строительства во Владимире и Иваново';?>
<?php $description = 'Проекты двухэтажных домов и коттеджей со вторым светом от компании Golden Home, стоимость строительство во Владимире и Иваново';?>
<?php $keywords = 'проекты домов со вторым светом, проекты коттеджей со вторым светом';?>
<?php $breadcrumb = 'Со вторым светом';?>
<?php $breadcrumb2 = 'Проекты домов';?>
<?php $root = '../';
include($root."blocks/meta.php"); 
include($root."blocks/header.php");?>

<div class="container">
<?php include($root."blocks/breadcrumbs.php");?>
          <h1>Проекты двухэтажных домов и коттеджей со вторым светом</h1>
	<div class="row" id="proekts" itemtype="http://schema.org/ItemList" itemscope>
                    <?php include("../proekt-63-186/block.php");?>
                    <?php include("../proekt-65-259/block.php");?>
    </div>
</div>
<?php include($root."blocks/footer.php");?>