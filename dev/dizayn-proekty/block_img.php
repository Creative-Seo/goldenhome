<?php $breadcrumb2 = 'Портфолио';?>
<?php $style = '<style>.fancybox-thumb,.intro{margin:1px;padding:0;}.fancybox-thumb {max-height: none;}</style>';?>
<?php $root = '../';
include($root."blocks/meta.php");
include($root."blocks/header.php");?>

<div class="container-fluid">
<?php include($root."blocks/breadcrumbs.php");?>
<h1 class="h1_design"><?php echo $h1;?></h1>
<img src="<?php echo HTTP_URL,$foto;?>" alt="<?php echo $alt;?>"  class="img-responsive imghd"/>

<div id="container"><div class="row">
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<?php echo $col_p1;?></div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<?php echo $col_p2;?></div>

<span class="h2 col-lg-12 col-md-12 col-sm-12 col-xs-12">Заказать <a href="<?php echo HTTP_SERVER; ?>dizayn-interera/">дизайн интерьера</a> вы можете позвонив по телефону +7(4922) 37-73-91</span>
</div></div>
<?php include("../block_img.php");?>

<div class="row intro">
<?php $images = scandir('./');
if (false !== $images) {
    $imgarray = preg_grep('/\d\.(?:jpe?g)$/', $images);
	$x=0;$y=[false,false,false,false];
	foreach($imgarray as $row) {
		$col[$x] =$col[$x].'<div class="col-xs-12 intro">
<a class="fancybox-thumb" rel="gallery1" href="'.HTTP_URL.htmlspecialchars(urlencode($row)).'" title="">
	<img src="'.HTTP_URL.htmlspecialchars(urlencode($row)).'" alt="'.$h1.'" class="img-responsive">
</a></div>' ;
		list($width_l, $height_l, $type_l, $attr_l) = getimagesize($row);
		if ($height_l/$width_l>1.4) {$y[$x]=true;}
		$x++;if($x==4){$x=0;}
		if ($y[$x]) {$y[$x]=false;$x++;if($x==4){$x=0;}}
}} ?>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 "><div class="row"><?php echo $col[0];?></div></div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 "><div class="row"><?php echo $col[1];?></div></div>
<div class="clearfix visible-sm"></div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 "><div class="row"><?php echo $col[2];?></div></div>
<div class="col-lg-3 col-md-3 col-sm-6 col-xs-12 "><div class="row"><?php echo $col[3];?></div></div>
</div>

<?php if (isset($col_p3)) {?>
<div id="container"><div class="row">
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<?php echo $col_p3;?></div>
<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
<?php echo $col_p4;?></div>
</div></div>
<?php } ?>
</div>

<?php include("../../blocks/footer.php");?>