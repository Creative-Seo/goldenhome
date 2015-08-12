<?php $title = 'Турнир по силовому экстриму, посвященный дню молодежи';?>
<?php $description = 'Турнир по силовому экстриму, посвященный дню молодежи';?>
<?php $keywords = '';?>
<?php $breadcrumb = 'Турнир по силовому экстриму';?>
<?php $root = '../../';
include($root."blocks/meta.php"); 
include($root."blocks/header.php");?>

<div class="container">
<?php include($root."blocks/breadcrumbs.php");?>
  <h1 class="h1_small">Турнир по силовому экстриму, посвященный дню молодежи</h1>
  <p>Турнир прошел 28 июня 2014 года в 15:00, в парке 850-летия г. Владимира.</p>

<?php
$photo_dir = '/image/reports/ekstrim2014/';
$photo_alt = 'Фотография с мероприятия';
$photo_col = 'col-xs-6 col-sm-3 col-lg-2'; 
include($root."blocks/photo-list.php");
?>
</div>
<?php include($root."blocks/footer.php");?>