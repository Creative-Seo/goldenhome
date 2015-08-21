<?php $title = 'Проекты домов и коттеджей с гаражом';?>
<?php $description = 'Современный мир невозможно представить без следующих вещей – мобильного телефона, компьютера и автомобиля. Сегодня речь пойдёт о том, как лучше всего спроектировать и расположить гараж в вашем коттеджном доме';?>
<?php $keywords = 'проекты домов с гаражом, проекты коттеджей, проект дома под ключ, проекта дома под ключ цена, проекты двухэтажных домов, проекты домов из газобетона, проект строительства дома, проект двухэтажного дома';?>
<?php $breadcrumb = 'С гаражом';?>
<?php $breadcrumb2 = 'Проекты домов';?>
<?php $root = '../../';
include($root."blocks/meta.php"); 
include($root."blocks/header.php");?>

<div class="container">

          <h1>Проекты домов с гаражом</h1>
	<div class="row" id="proekts" itemtype="http://schema.org/ItemList" itemscope>
<?php $class_block_proekt = 'col-sm-6 col-md-4 bl-pr';
include("../proekt-68-178/block.php");
include("../proekt-55-220/block.php");
include("../proekt-53-320/block.php");
include("../proekt-47-248/block.php");
include("../proekt-45-163/block.php");
include("../proekt-44-193/block.php");
include("../proekt-18-227/block.php");
include("../proekt-07-353/block.php");?>
    </div>
</div>
<?php include($root."blocks/footer.php");?>