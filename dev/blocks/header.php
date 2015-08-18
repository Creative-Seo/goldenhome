<!--header-->
<header class="header container">
	<div class="row">
		<div class="col-md-3">
			<div class="header-logo">
				<div class="header-sklogo">
					<a href="/">
						<?php if (HTTP_ID == '/') { ?><img class="img-responsive" src="/img/logo.png" alt="">
						<?php } else { ?><img class="img-responsive" src="/img/logo-black.png" alt="">
						<?php } ?>
					</a>
				</div>
			</div>
		</div>
		<div class="col-md-3">
		</div>
		<div class="col-md-3">
		</div>
		<div class="col-md-3">
			
				<div class="topright">
					<div class="topright-drag"><span class="topright-phone">+7 (4922) 37 73 90</span>
						<!-- <a class="topright-button" href="javascript:void(0);" data-toggle="modal" data-target="#modal-zakaz">Заказать обратный звонок</a> -->
					</div>
				</div>
			
		</div>
	</div>
	<div class="row">
		
			<?php include($root."blocks/_menu.php"); ?>
		
	</div>
	
	
	
	
</header> 
<?php if ($_SERVER['REQUEST_URI'] != '/') { ?>
<div class="container">
	<div class="row">
		
		<?php include($root."blocks/breadcrumbs.php");?>
		
	</div>
</div> 
<?php }?>