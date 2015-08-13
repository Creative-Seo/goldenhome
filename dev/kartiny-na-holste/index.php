<?php $title = 'Картины маслом на холсте, красивые картины';?>
<?php $description = 'На странице представлены картины маслом на холсте, написанные художником Etereo, если вам понравился стиль этих пейзажей, вы можете заказать картину';?>
<?php $keywords = 'Картины маслом на холсте, картины холст купить, купить картину холст масло';?>
<?php $breadcrumb = 'Картины на холсте';?>
<?php $root = '../';
include($root."blocks/meta.php");
include($root."blocks/header.php");?>

<div class="container">

  <h1>Картины на холсте</h1>
  <p>Все приведенные ниже работы написаны маслом на холсте. Ручная работа.</p>

<?php 
$photo_dir = '/image/pictures/';
$photo_alt = 'Картина на холсте';
$photo_col = 'col-xs-6 col-sm-3 col-lg-2'; 
include($root."blocks/photo-list.php");
?>

</div>
<?php include($root."blocks/footer.php");?>