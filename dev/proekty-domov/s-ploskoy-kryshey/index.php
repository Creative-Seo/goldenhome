<?php $title = 'Проекты домов с плоской крышей, эксплуатируемой кровлей, фото, стоимость строительства во Владимире и Иваново';?>
<?php $description = 'Проекты домов и коттеджей с плоской крышей (эксплуатируемой кровлей) от компании Golden Home, стоимость строительство во Владимире и Иваново';?>
<?php $keywords = 'Проекты домов с плоской крышей, плоская крыша';?>
<?php $breadcrumb = 'С плоской крышей';?>
<?php $breadcrumb2 = 'Проекты домов';?>
<?php $root = '../';
include($root."blocks/meta.php"); 
include($root."blocks/header.php");?>

<div class="container">
<?php include($root."blocks/breadcrumbs.php");?>
          <h1>Проекты домов и коттеджей с плоской крышей</h1>
	<div class="row" id="proekts" itemtype="http://schema.org/ItemList" itemscope>
                    <?php include("../proekt-63-186/block.php");?>
                    <?php include("../proekt-56-135/block.php");?>
    </div>
</div>
<?php include($root."blocks/footer.php");?>