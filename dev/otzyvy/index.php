<?php $title = 'Отзывы наших клиентов - строительная компания Golden Home';?>
<?php $description = 'Отзывы о компании Golden Home, отзывы наших клиентов';?>
<?php $keywords = 'Отзывы наших клиентов';?>
<?php $breadcrumb = 'Отзывы';?>
<?php $root = $_SERVER['DOCUMENT_ROOT'];
$style = '<style>.row img {margin-top: 0;}</style>';
include($root."/blocks/meta.php");
include($root."/blocks/header.php");?>

<div class="container">
	<?php include($root."/blocks/breadcrumbs.php"); ?>
  <h1>Отзывы наших клиентов</h1>
  <div class="row">
	<div class="col-sm-4 col-md-3">
            <a href="/image/opinions/1.jpg" rel="jquery-lightbox">
              <img src="/image/opinions/1s.jpg" alt="Отзыв">
            </a>
    </div>
	<div class="col-sm-8 col-md-9 col-lg-8">
              <p>Я когда думал, из чего дом строить, решил выбрать самый теплый материал, чтобы на энергии экономить и не отапливать улицу. Остановился на газоблоках автоклавного твердения. В зимнее время расход на газ на мои 320 кв.м. составил около 2000 руб. Зимой в нем тепло, а летом прохладно. Время показало, что с материалом я не промахнулся.</p>
              <p class="author">&mdash; Александр</p>
    </div>
  </div>
  <div class="row">
	<div class="col-sm-4 col-md-3">
            <a href="/image/opinions/2.jpg" rel="jquery-lightbox">
              <img src="/image/opinions/2s.jpg" alt="Отзыв">
            </a>
    </div>
	<div class="col-sm-8 col-md-9 col-lg-8">
              <p>Мы сейчас отделываем дом, причем сами. Знаете, с этим много хлопот. Но что приятно удивило: стены ровные, поэтому, во-первых, не пришлось тратиться на лишнюю шпатлевку, во-вторых, мы экономим свое время и силы. Плюс блоки без особого труда поддаются сверлению. Муж с легкостью навесил батареи и провел все коммуникации.</p>
              <p class="author">&mdash; Лариса Владеленовна</p>
    </div>
  </div>
  <div class="row">
	<div class="col-sm-4 col-md-3">
            <a href="/image/opinions/3.jpg" rel="jquery-lightbox">
              <img src="/image/opinions/3s.jpg" alt="Отзыв">
            </a>
    </div>
	<div class="col-sm-8 col-md-9 col-lg-8">
              <p>Хотим сказать слова благодарности строителям из компании «Golden Home», которые у нас работали. Бригада &mdash; настоящие профессионалы. Работали на совесть! Уложились в намеченные сроки. Дом получился красивым, чистым, просторным. Всем хватит места. Довольны все члены семьи. Большое спасибо строителям.</p>
              <p class="author">&mdash; Семья Тригуб</p>
    </div>
  </div>
  <div class="row">
	<div class="col-sm-4 col-md-3">
            <a href="/image/opinions/4.jpg" rel="jquery-lightbox">
              <img src="/image/opinions/4s.jpg" alt="Отзыв">
            </a>
    </div>
	<div class="col-sm-8 col-md-9 col-lg-8">
              <p>К своему дому я пристраивала кухню. Переживала очень. Вдруг строители напортачат, и дом трещинами пойдет. Переживания были напрасны. Сделали все быстро, аккуратно, придраться не к чему. Я довольна. Кухня получилась просторная, теплая. И готовить и отдыхать комфортно. Мечта хозяйки, одни словом.</p>
              <p class="author">&mdash; Майя Рудольфовна</p>
    </div>
  </div>
</div>
<?php include($root."/blocks/footer.php");?>