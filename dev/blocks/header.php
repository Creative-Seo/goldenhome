<!--header-->
<header class="header container-fluid">
	<div class="row hidden-xs">
		<div class="col-sm-4 col-md-3 col-lg-2">
			<div class="header-logo skew-right">
				<div class="header-sklogo skew-left">
					<a href="/">
	<?php if (HTTP_ID == '/') { ?><img class="img-responsive" src="/img/logo.png" alt="Агентство права и оценки" />
	<?php } else { ?><img class="img-responsive" src="/img/logo-black.png" alt="Агентство права и оценки" />
	<?php } ?>
					</a>
				</div>
			</div>
		</div>
		<div class="col-sm-8 col-md-6 col-lg-7">
	<?php include($root."blocks/_menu.php"); ?>
		</div>
		<div class="col-md-3 hidden-sm">
	<?php include($root."blocks/_topright.php"); ?>
		</div>
	</div>
	<nav class="navbar navbar-default visible-xs" id="navbar">
	  <div class="nav-content">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-top"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span></button>
			<div class="header-logo">
				<div class="header-sklogo">
					<a href="/">
	<?php if (HTTP_ID == '/') { ?><img class="img-responsive" src="/img/logo.png" alt="Агентство права и оценки" />
	<?php } else { ?><img class="img-responsive" src="/img/logo-black.png" alt="Агентство права и оценки" />
	<?php } ?>
					</a>
				</div>
			</div>
		</div>
		<div class="navbar-collapse collapse" id="navbar-top">
	<?php include($root."blocks/_menu.php"); ?>
		</div>
	  </div>
	</nav>
</header> 
<?php if ($_SERVER['REQUEST_URI'] != '/') {include($root."blocks/breadcrumbs.php");}?>