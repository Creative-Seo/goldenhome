<!--header-->
<header class="header container">
	<div class="row">
		<div class="col-sm-5 col-md-3 col-lg-3">
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
		<div class="col-sm-5 col-md-4 col-lg-3 col-xs-offset-2 col-sm-offset-2 col-md-offset-1 col-lg-offset-3">
			<div class="adres-header">
				г. Bлaдимиp, ул. Мира, д. 15 В, офис 12
			</div>
		</div>
		<div class="col-sm-5 col-md-4 col-lg-3 col-xs-offset-2 col-sm-offset-7 col-md-offset-0">
			
				<div class="topright">
					<div class="topright-drag"><span class="topright-phone">+7 (4922)<nobr>&nbsp;37 73 90</nobr></span><br>
						<a class="topright-button" href="javascript:void(0);" data-toggle="modal" data-target="#modal-zakaz">Заказать обратный звонок</a>
					</div>
				</div>
			
		</div>
	</div>
</header> 

<div class="nav-wrapper">
	<div class="container">
		<div class="row">
			<?php include($root."blocks/_menu.php"); ?>
		</div>
	</div>
</div>

<?php if (($_SERVER['REQUEST_URI'] != '/')&&(!(stristr($_SERVER['REQUEST_URI'],'dizayn-proekty')))) { ?>
<div class="container">
	<div class="row">
		
		<?php include($root."blocks/breadcrumbs.php");?>
		
	</div>
</div> 
<?php }?>