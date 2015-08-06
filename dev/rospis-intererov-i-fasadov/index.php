<?php $title = 'Роспись стен. Смотрите фото: росписи в интерьере квартиры, офиса, магазина';?>
<?php $description = 'Художники и дизайнеры компании Golden Home профессионально распишут Ваш интерьер, с учетом всех Ваших пожеланий или выбранной темы';?>
<?php $keywords = 'роспись стен, роспись фото, роспись интерьеров, роспись фасадов';?>
<?php $breadcrumb = 'Роспись интерьеров';?>
<?php $root = $_SERVER['DOCUMENT_ROOT'];
include($root."/blocks/meta.php");
include($root."/blocks/header.php");?>

<div class="container">
	<?php include($root."/blocks/breadcrumbs.php"); ?>
  <h1>Роспись интерьеров и фасадов</h1>
  <p>Компания Golden Home предлагает широкий спектр услуг по приданию оригинальности Вашему бизнесу или Вашему дому. Более 10 лет работы, использование долговечных материалов, творческий подход к реализации любой идеи делают наши проекты по-настоящему яркими, выразительными и оригинальными.</p>

<?php 
$photo_dir = '/image/painting_int/';
$photo_alt = 'Фотография росписи интерьера';
$photo_col = 'col-xs-6 col-sm-3 col-lg-2'; 
include($root."/blocks/photo-list.php");
?>

</div>
<?php include($root."/blocks/footer.php");?>