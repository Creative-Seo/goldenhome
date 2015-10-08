<?php $title = 'Блоки ЭКО купить во Владимире по доступной цене';?>
<?php $description = 'Компания Golden Home &mdash; официальный партнер ЭКО во Владимире. У нас выможете купить блоки ЭКО по выгодным ценам';?>
<?php $keywords = 'эко, блоки эко, еко, купить эко, партнер эко, пеноблоки, газосиликат';?>
<?php $breadcrumb = 'Блоки «ЭКО»';?>
<?php $breadcrumb2 = 'Газоблоки';?>
<?php $breadcrumb2_url = 'gazobloki';?>
<?php $root = '../';
include("array.php");
include($root."blocks/meta.php");
include($root."blocks/header.php");?>

<div class="container">

  <h1>Газобетонные блоки ЭКО</h1>
  <p><b>Блоки ячеистого бетона</b> «ЭКО»,произведенные в городе Ярославль изготавливаются по технологии немецкого производителя "Wehrhahn", сочетают в себе высокие технические характеристики, геометрическую точностью блоков и невысокую цену.</p>

<h2>Прайс-лист от 18 октября 2015 года</h2>
  <div class="table-responsive">
	<table width="100%" border="0" cellspacing="0" cellpadding="5" style="font-size:11px;text-align:center;" class="table table-striped table-hover table-bordered" itemtype="http://schema.org/ItemList" itemscope>
		<tr style="font-size:11px;background-color:#ffd400;font-weight:bold">
			<td rowspan="2">Наименование</td>
			<td>Размер блока</td>
			<td>Объем одного блока</td>
			<td colspan="2">Вес одного блока в зависимости от плотности, кг</td>
			<td>Размер поддона с блоками</td>
			<td colspan="2">Количество на одном поддоне</td>
			<td colspan="2">Вес поддона с блоками в зависимости от плотности, кг</td>
			<td rowspan="2"><nobr>Цена за 1 м<sup>3</sup>,</nobr> руб. с НДС 18%</td>
		</tr>
		<tr style="font-size:11px;background-color:#ffd400;font-weight:bold">
			<td>(ДхШхВ), мм</td>
			<td>м<sup>3</sup></td>
			<td>400</td>
			<td>500</td>
			<td>(ДхШхВ), мм</td>
			<td>шт.</td>
			<td>м<sup>3</sup></td>
			<td>400</td>
			<td>500</td>
		</tr>
<?php foreach ($bd as $row) { ?>
		<tr itemtype="http://schema.org/Product" itemprop="itemListElement" itemscope>
			<td style="text-align:left;"><span itemprop="name"><?php echo $row['id'];?></span></td>
			<td><?php echo $row['c0'];?></td>
			<td><?php echo $row['c1'];?></td>
			<td><?php echo $row['c2'];?></td>
			<td><?php echo $row['c3'];?></td>
			<td><?php echo $row['c4'];?></td>
			<td><?php echo $row['c5'];?></td>
			<td><?php echo $row['c6'];?></td>
			<td><?php echo $row['c7'];?></td>
			<td><?php echo $row['c8'];?></td>
			<td class="cenik" itemtype="http://schema.org/Offer" itemprop="offers" itemscope><span itemprop="price"><?php echo $row['c9'];?></span><meta itemprop="priceCurrency" content="RUB"></td>
		</tr>
<?php } ?>
	</table>
  </div>

<h2>Физико-технические показатели блоков из автоклавного ячеистого бетона</h2>
  <div class="table-responsive">
	<table width="100%" border="0" cellspacing="0" cellpadding="5" style="font-size:11px;text-align:center;" class="table table-striped table-hover table-bordered">
		<tr style="font-size:11px;background-color:#ffd400;font-weight:bold">
			<td rowspan="2">Наименование</td>
			<td>Плотность (объемн. масса)</td>
			<td rowspan="2">Прочность на сжатие (класс бетона)</td>
			<td>Средняя прочность</td>
			<td>Паропрони-цаемость</td>
			<td>Теплопро-водность</td>
			<td>Усадка при высыхании</td>
			<td rowspan="2">Морозо-стойкость</td>
			<td rowspan="2">ГОСТ</td>
		</tr>
		<tr style="font-size:11px;background-color:#ffd400;font-weight:bold">
			<td>кг/м<sup>3</sup></td>
			<td>кгс/см<sup>2</sup></td>
			<td>мг/м ч Па</td>
			<td>Вт/м <sup>0</sup>С</td>
			<td>мм/м</td>
		</tr>
		<tr itemtype="http://schema.org/Product" itemprop="itemListElement" itemscope>
			<td style="text-align:left;" rowspan="3">Мелкие стеновые блоки из ячеистого бетона</td>
			<td>400</td>
			<td>В2,5</td>
			<td rowspan="2">26,2-45,8</td>
			<td>0,24</td>
			<td>0,096</td>
			<td>-</td>
			<td>F75</td>
			<td rowspan="3"><nobr>31360-2007</nobr><br><nobr>31359-2007</nobr></td>
		</tr>
		<tr itemtype="http://schema.org/Product" itemprop="itemListElement" itemscope>
			<td>500</td>
			<td>В3,5</td>
			<td>0,24</td>
			<td>0,12</td>
			<td>0,3</td>
			<td>F75 / F100</td>
		</tr>
		<tr itemtype="http://schema.org/Product" itemprop="itemListElement" itemscope>
			<td>600</td>
			<td>В3,5</td>
			<td>32,7-65,5</td>
			<td>0,23</td>
			<td>0,14</td>
			<td>0,3</td>
			<td>F100</td>
		</tr>
	</table>
  </div>

<h2>Логистические данные</h2>
  <div class="table-responsive">
	<table width="100%" border="0" cellspacing="0" cellpadding="5" style="font-size:11px;text-align:center;" class="table table-striped table-hover table-bordered">
		<tr style="font-size:11px;background-color:#ffd400;font-weight:bold">
			<td>Количество блоков<br> на 1 поддоне, м<sup>3</sup></td>
			<td>Кол-во поддонов<br> в 1 машине 20 т и L=13,6 м, шт.</td>
			<td>Объем блоков<br> в 1 машине, м<sup>3</sup></td>
		</tr>
		<tr>
			<td>1,44</td>
			<td>23</td>
			<td>33,12</td>
		</tr>
		<tr>
			<td>1,8</td>
			<td>18</td>
			<td>32,4</td>
		</tr>
		<tr>
			<td>1,92</td>
			<td>17</td>
			<td>32,64</td>
		</tr>
	</table>
  </div>

</div>
<?php include($root."blocks/footer.php");?>