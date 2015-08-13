<!--header-->
<header class="header"> 
<nav class="navbar navbar-default" id="navbar">
  <div class="nav-content">
    <div class="navbar-header">
		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1"> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
		<div class="header-logo">
		<a href="/">
<?php if (HTTP_ID == '/') { ?><img class="img-responsive" src="/img/logo.png" alt="Агентство права и оценки" width="283">
<?php } else { ?><img class="img-responsive" src="/img/logo-black.png" alt="Агентство права и оценки" />
<?php } ?>
		</a>
		</div>
	</div>
    <div class="collapse navbar-collapse pull-right" id="bs-example-navbar-collapse-1">
<?php include($root."blocks/_menu.php"); ?>
<?php include($root."blocks/_topright.php"); ?>
	</div>
  </div>
</nav>
</header> 
<?php if ($_SERVER['REQUEST_URI'] != '/') {include($root."blocks/breadcrumbs.php");}?>