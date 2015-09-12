<?php 
$modal_dop =[['kol','Количество блоков','В м3 или в штуках'],['message','Комментарий','Сообщение']];
$text = 'блок';$nomer = $breadcrumb;?>
<?php include($root."blocks/meta.php"); ?>
<?php include($root."blocks/header.php"); ?>

<div class="container clearfix" itemscope itemtype="http://schema.org/Product">

<h1 itemprop="name"><?php echo $breadcrumb; ?></h1>
<div class="row">
<div class="col-md-6">
    <img class="img-responsive center-block" src="<?php echo '/'.$bd['img']; ?>" alt="<?php echo $bd['alt']; ?>" itemprop="image">
    <h2>Характеристики</h2>
    <ul class="atrsul" itemprop="propertiesList" itemscope itemtype="http://schema.org/ItemList">
<?php foreach ($bd['table'] as $row) {?>
       <li class="atrnamepad" itemprop="itemListElement" itemscope itemtype="http://schema.org/NameValueStructure">
          <div class="atrname"><span itemprop="name"><?php echo $row[0]; ?></span>
              <div class="dot"></div>
          </div>
          <div class="atrtext"><span itemprop="value"><?php echo $row[1]; ?></span></div>
          <meta itemprop="main" content="True"/>
       </li>
<?php } ?>
    </ul> 
</div>

<div class="col-md-6">
	<div itemprop="offers" itemscope itemtype="http://schema.org/Offer">
		<p class="h2">Цена&nbsp;</p> 
		<p class="h2"><span itemprop="price"><?php echo $bd['cost']; ?></span>
		<meta itemprop="priceCurrency" content="RUB">
		<span>&nbsp;руб./м<sup>3</sup></span></p>
		<button class="btn-zakaz" data-toggle="callback" data-options="name,tel,col,message" data-text="Заказ <?php echo $breadcrumb; ?>">Заказать</button>
		<p><b><link itemprop="availability" href="http://schema.org/InStock">В наличии</b></p>
	</div>
	<span itemprop="description" ><?php echo $bd['span']; ?></span>  
	<h2>Доставка</h2>
	<p>В городе Владимир самовывоз со склада. Стоимость доставки по Владимирской области рассчитывается по километражу.</p>
	<h2>Оплата</h2>
	<p>Вы можете оплатить наличными в офисе. Безналичный расчет.</p>
</div>
</div>
</div>
<?php include($root."blocks/breadcrumbs.php"); ?>
<?php include($root."blocks/footer.php");?>