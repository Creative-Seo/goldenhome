<?php
$breadcrumb = $bd['breadcrumb'];
$breadcrumb2 = 'Проекты домов'; 
$breadcrumb2_url = 'proekty-domov/';
$style='
<link rel="stylesheet" href="/css/lightSlider.css">
<link rel="stylesheet" href="/css/lightGallery.css">
<style>
.row img {margin:0px;}
.lSAction > a {background-color:#333;z-index:1000;}
.btn-zakaz {margin-top: 30px;}
</style>';
$text = 'проект';$nomer = $bd['nomer'];
$stoimostProekta = number_format((int)$bd['obshchayaPloshchad'] * 100, 0, ',', ' ');;
$stoimostStroitelstva = number_format((int)$bd['obshchayaPloshchad'] * 15000, 0, ',', ' ');;
$dirs = array("75-192", "74-246", "73-245", "72-290", "71-143", "70-207", "69-118", "59-183", "60-160", "61-192", "62-153", "63-186", "64-142", "65-259", "66-215", "67-142", "68-178", "58-120", "56-135", "52-142", "50-110", "41-125", "39-125", "24-142", "21-115", "19-125", "17-115", "16-140", "09-100", "05-146", "57-212", "55-220", "54-160", "47-248", "49-179", "46-161", "45-163", "44-193", "34-177", "31-250", "08-178", "30-172", "28-162", "26-159", "25-235", "25-152", "23-154", "22-150", "03-165", "20-224", "18-227", "15-240", "14-220", "11-200", "53-320", "48-255", "40-325", "12-260", "07-353", "04-295", "01-300");
$root = '../../';
include($root."blocks/meta.php");
include($root."blocks/header.php");
?>

<div itemscope itemtype="http://schema.org/Product">
<div class="container">

	<h1 itemprop="name"><?php echo $bd['h1'];?></h1>
	<div class="row">
		<div class="col-sm-7 col-md-8 col-lg-7"><div class="row">
			<div class="col-md-9" itemscope itemtype="http://schema.org/ImageObject">
			<a class="fancybox" rel="gallery" href="/proekty-domov/proekt-<?php echo $bd['nomer'].'/img/'.$bd['nomer'];?>.jpg" title="Проект <?php echo $bd['nomer'];?>">
				<img src="/proekty-domov/proekt-<?php echo $bd['nomer'].'/img/'.$bd['nomer'];?>.jpg" alt="<?php echo $bd['breadcrumb'];?>" class="img-responsive" title="Проект <?php echo $bd['nomer'];?>" itemprop="contentUrl">
				<meta itemprop="name" content="Проект <?php echo $bd['nomer'];?>" />
				<meta itemprop="description" content="<?php echo $description;?>" />
			</div>
<?php $imgs = [['-1.jpg','Передний фасад'],['-2.jpg','Задний фасад'],['-3.jpg','Правый фасад'],['-4.jpg','Левый фасад']];
for($i=1; $i<=$bd['etazhey'];$i++) {array_push($imgs,['-'.$i.'e.jpg',$i.' этаж']);}
foreach ($imgs as $row) { ?>
			<div class="col-xs-4 col-md-3">
			<a  class="fancybox" rel="gallery" href="/proekty-domov/proekt-<?php echo $bd['nomer'].'/img/'.$bd['nomer'].$row[0];?>">
				<img src="/proekty-domov/proekt-<?php echo $bd['nomer'].'/img/'.$bd['nomer'].$row[0];?>" alt="Проект <?php echo $bd['nomer'].' - '.$row[1];?>" title="Проект <?php echo $bd['nomer'].' - '.$row[1];?>" class="img-responsive">
			</a>
			</div>
<?php } ?>
		</div></div>
		<div class="col-sm-5 col-md-4 col-lg-3 col-lg-offset-1 proekt" itemprop="offers" itemscope itemtype="http://schema.org/Offer">
		   <div class="h2">Стоимость проекта:</div>
		   <div class="price"><span itemprop="price"><?php echo $stoimostProekta?></span><meta itemprop="priceCurrency" content="RUB"> руб.</div>
		   <div class="h2">Стоимость строительства дома<sup>*</sup>:</div>
		   <div class="price"><span><?php echo $stoimostStroitelstva?></span> руб.</div>
		   <div class="kvm">Цена за кв. метр: 15 000 руб.</div>
		   <button data-toggle="modal" data-target="#modal-zakaz" class="btn-zakaz">Заказать проект</button>
		</div>
	</div>
</div>

<div class="container blocks-area">
    <div class="row">
      <div class="col-sm-6 col-md-3">
        <div class="area block-prop center-block"><div class="block-area">
           	<div class="pl">Общая площадь:</div>
        	<div class="plc"><?php echo $bd['obshchayaPloshchad'];?></div>
        </div></div>
      </div>  
      <div class="col-sm-6 col-md-3">  
        <div class="area block-prop center-block"><div class="block-area">
           	<div class="pl">Жилая площадь:</div>
        	<div class="plc"><?php echo $bd['zhilayaPloshchad'];?></div>
        </div></div>
      </div>  
      <div class="col-sm-6 col-md-3">   
        <div class="area block-prop center-block"><div class="block-area">
           	<div class="pl">Габариты:</div>
        	<div class="plc"><?php echo $bd['gabarity'];?></div>
        </div></div>
      </div>  
      <div class="col-sm-6 col-md-3">   
        <div class="area block-prop center-block"><div class="block-area">
           	<div class="pl">Срок постройки:</div>
        	<div class="plc">от 3 месяцев</div>
        </div></div>
      </div>  
    </div>
</div> 

<?php if (isset($bd['opisanie'])) { ?>
<div class="container">
    <div class="row">
       <div class="col-xs-12">
        <div class="h2">Описание:</div>
        <p class="text-justify"><?php echo $bd['opisanie'];?></p>
        <p><sup>*</sup> Указана ориентировочная стоимость строительства дома во Владимире, Владимирской области, Иваново. Для точного расчета необходимо обратиться в наш офис.</p>
        </div>
    </div>
</div>
<?php } ?>

<div class="container block-descr">
<div class="row">
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="h2">Основные характеристики:</div>
        <div class="atrs">
            <ul class="atrsul">
<?php foreach($bd['dopolnitelno'] as $row) { ?>
                <li class="atrnamepad">
                    <div class="atrname"><span><?php echo $row[0];?></span>
                       <div class="dot"></div>
                    </div>
                    <div class="atrtext"><span><?php echo $row[1];?></span></div>
                </li>
<?php } ?>
                <li class="atrnamepad">
                    <div class="atrname"><span>Архитектурный стиль:</span>
                       <div class="dot"></div>
                    </div>
                    <div class="atrtext"><span><?php echo $bd['arhitekturnyyStil'];?></span></div>
                </li>
                <li class="atrnamepad">
					<div class="atrname"><span>Категории проекта</span>
                       <div class="dot"></div>
                    </div>
                    <div class="atrtext"><span>
	<?php foreach($bd['cate'] as $cate) { ?>
						<nobr><a href="/proekty-domov/<?php echo $cate[0]; ?>"><?php echo $cate[1];?></a>, </nobr>
	<?php } ?>
					</span></div>
                </li>
            </ul>
        </div> 
    </div>  
    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
        <div class="h2">Планировка:</div>
        <div role="tabpanel">
			<ul class="nav nav-tabs" role="tablist">
				<li role="presentation" class="active"><a href="#h1" aria-controls="h1" role="tab" data-toggle="tab">1 этаж</a></li>
<?php if($bd['etazhey']>1) { for($i=2; $i<=$bd['etazhey'];$i++) { ?>
				<li role="presentation"><a href="#h<?php echo $i;?>" aria-controls="h<?php echo $i;?>" role="tab" data-toggle="tab"><?php echo $i;?> этаж</a></li>
<?php }} ?>
<?php if(!empty($bd['expl'])) { ?>
				<li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab">Экспликация помещений</a></li>
<?php } ?>
			</ul>
			<div class="tab-content">
				<div role="tabpanel" class="tab-pane fade in active" id="h1">
					<div class="h3">План 1 этажа</div>
					<img src="/proekty-domov/proekt-<?php echo $bd['nomer'];?>/img/<?php echo $bd['nomer'];?>-1e.jpg" alt="Проект <?php echo $bd['nomer'];?> - 1 этаж" title="Проект <?php echo $bd['nomer'];?> - 1 этаж" class="img-responsive">
				</div>
<?php if($bd['etazhey']>1) { for($i=2; $i<=$bd['etazhey'];$i++) { ?>
				<div role="tabpanel" class="tab-pane fade" id="h<?php echo $i;?>">
				   <div class="h3">План <?php echo $i;?> этажа</div>
				   <img src="/proekty-domov/proekt-<?php echo $bd['nomer'];?>/img/<?php echo $bd['nomer'];?>-<?php echo $i;?>e.jpg" alt="Проект <?php echo $bd['nomer'];?> - <?php echo $i;?> этаж" title="Проект <?php echo $bd['nomer'];?> - <?php echo $i;?> этаж" class="img-responsive">
				</div>
<?php }} ?>
<?php if(!empty($bd['expl'])) { ?>
				<div role="tabpanel" class="tab-pane fade" id="messages">
<?php 
$col = round(12/count($bd['expl']));
foreach($bd['expl'] as $row) { ?>
					<div class="col-md-<?php echo $col;?>">
					  <?php echo $row;?>
					</div>
<?php } ?>
				</div>
<?php } ?>
			</div>
		</div>
    </div>     
</div>
</div>

</div> <!-- itemscope -->

<div class="container">
    <div class="row">
       <div class="h2">Похожие проекты:</div>
<?php $class_block_proekt = 'col-sm-6 col-md-3 sample shadow-z-1 bl-pr';
$len = count($dirs);
foreach($dirs as $key => $row) { 
	if (($dirs[$key-2] == $bd['nomer'])||($dirs[$key-1] == $bd['nomer'])||($dirs[$key+1] == $bd['nomer'])||($dirs[$key+2] == $bd['nomer'])||
		(($dirs[0] == $bd['nomer'])&&(($key == $len-1)||($key == $len-2)))||(($dirs[1] == $bd['nomer'])&&($key == $len-1))||
		(($dirs[$len-1] == $bd['nomer'])&&(($key == 0)||($key == 1)))||(($dirs[$len-2] == $bd['nomer'])&&($key == 0)))
		{include("../proekt-".$row."/block.php");}
} ?>
    </div>
</div>
<?php include($root."blocks/footer.php"); ?>