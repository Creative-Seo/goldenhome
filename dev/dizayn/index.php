<?php $breadcrumb = 'Дизайн';
$root = $_SERVER['DOCUMENT_ROOT'];?>
<?php include($root."/blocks/meta.php"); ?>
<link href="<?php echo HTTP_SERVER.$self[1];?>/css/style.css" rel="stylesheet">
<?php include($root."/blocks/header.php"); ?>

<div class="container">
	<div class="row">
	    <?php include($root."/blocks/breadcrumbs.php"); ?>

	    <h1 class="h1">Дизайн</h1>

	</div>
</div>

<section id="opener">
		<div class="part p1">
			<div class="bg" style="background-image: url(<?php echo HTTP_SERVER.$self[1];?>/img/wohnen-5.jpg)"></div>
			<img class="seo-hidden" src="<?php echo HTTP_SERVER.$self[1];?>/img/wohnen-5.jpg" alt="">
			<div class="inner">
				<h1><span>Welcome to your</span><br><span>new home</span></h1>
				<a href="#">Step inside now</a>
			</div>
		</div>
		<div class="part p2">
			<div class="bg" style="background-image: url(<?php echo HTTP_SERVER.$self[1];?>/img/region-10.jpg)"></div>
			<img class="seo-hidden" src="<?php echo HTTP_SERVER.$self[1];?>/img/region-10.jpg" alt="">
			<div class="inner">
				<h1><span>Succumb to the charms of</span><br><span>Ticino's sunny side</span></h1>
				<a href="#">Soak up the atmosphere now</a>
			</div>
		</div>
</section>

<?php include($root."/blocks/footer.php"); ?>
<script>
$('#opener .p1').hover(function(){
	$(this).css('right', '30%');
	$('#opener .p2').css('left', '70%');
},function(){
	$(this).css('right', '50%');
	$('#opener .p2').css('left', '50%');
});
$('#opener .p2').hover(function(){
	$(this).css('left', '30%');
	$('#opener .p1').css('right', '70%');
},function(){
	$(this).css('left', '50%');
	$('#opener .p1').css('right', '50%');
});
$('#opener .p1 a').hover(function(){
	$('#opener .p2').css('opacity', '0.3');
},function(){
	$('#opener .p2').css('opacity', '1');
});
$('#opener .p2 a').hover(function(){
	$('#opener .p1').css('opacity', '0.3');
},function(){
	$('#opener .p1').css('opacity', '1');
});
</script>