<?php $breadcrumb = 'Дизайн';
$root = '../'; 
include($root."blocks/meta.php"); ?>
<link href="css/style.css" rel="stylesheet">
<?php include($root."blocks/header.php"); ?>

<div class="container">
	<div class="row">
	    <h1 class="h1">Дизайн</h1>
	</div>
</div>

<section id="opener">
		<div class="part p1">
			<div class="bg" style="background-image: url(img/wohnen-5.jpg)"></div>
			<img class="seo-hidden" src="img/wohnen-5.jpg" alt="">
			<div class="inner">
				<h1><span>Welcome to your</span><br><span>new home</span></h1>
				<a href="#">Step inside now</a>
			</div>
		</div>
		<div class="part p2">
			<div class="bg" style="background-image: url(img/region-10.jpg)"></div>
			<img class="seo-hidden" src="img/region-10.jpg" alt="">
			<div class="inner">
				<h1><span>Succumb to the charms of</span><br><span>Ticino's sunny side</span></h1>
				<a href="#">Soak up the atmosphere now</a>
			</div>
		</div>
</section>

<?php include($root."blocks/footer.php"); ?>