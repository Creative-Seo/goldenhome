<!--header-->
<header class="header"> 
<nav class="navbar navbar" id="navbar">
  <div class="nav-content">
    <div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
		<div class="header-logo">
		<a href="/">
<?php if (HTTP_ID == '/') { ?><img class="img-responsive" src="/img/logo.png" alt="Агентство права и оценки" />
<?php } else { ?><img class="img-responsive" src="/img/logo-black.png" alt="Агентство права и оценки" />
<?php } ?>
		</a>
		</div>
	</div>
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<?php include($root."blocks/menu.php"); ?>
	</div>
	<div class="visible-sm">
		<div class="col-lg-4 col-md-4 col-sm-4 logo adres">
			<span class="center-block"><i class="fa fa-map-marker fa-2x" style="margin-right:5px"></i>г. Владимир, ул. Мира, д. 15в, оф. 12</span>
		</div>
		<div class="col-lg-4 col-md-6 col-sm-6 pull-right">
			<div class="phone"><span>+7 (4922) 37 73 90</span><br>
				<a href="javascript:void(0);" data-toggle="modal" data-target="#modal-zakaz">Заказать обратный звонок</a></div>
		</div>
    </div>
  </div>
</nav>
</header> 
<?php if ($_SERVER['REQUEST_URI'] != '/') {include($root."blocks/breadcrumbs.php");}?>