<?php $price = number_format($ploshad * 15000, 0, ',', ' '); 
if (isset($dirs)) {
	$dirs[$nproekta] = array($ploshad,$jilyhkomnat,$etagi,$arhitekturnyyStil,$dopolnitelno);
}
?>
    <div class="col-sm-6 col-md-3 bl-pr" data-dir="<?php echo $nproekta;?>" itemtype="http://schema.org/Product" itemprop="itemListElement" itemscope>
      <div class="imgpr">
		<a href="/proekty-domov/proekt-<?php echo $nproekta;?>/">
			<img src="/proekty-domov/proekt-<?php echo $nproekta;?>/img/<?php echo $nproekta;?>.jpg" alt="" class="img-responsive">
	  </a></div>
      <div class="przagl">
		<a itemprop="url" href="/proekty-domov/proekt-<?php echo $nproekta;?>/"> 
			<span  itemprop="name">Проект загородного дома <?php echo $nproekta;?></span></a></div>
      <div class="przagl plosh">Площадь <span><?php echo $ploshad;?></span> м<sup>2</sup></div>
      <div class="przagl">Стоимость строительства</div>
      <div class="przagl stoim"><?php echo $price;?> <span>руб.</span></div>
    </div>
