<?php $title = 'Ландшафтный дизайн участка. Фото ландшафтного дизайна от компании Golden Home';?>
<?php $description = 'Наши ландшафтные дизайнеры сделают ваш участок гармоничным, красивым и функциональным. Фото ландшафтного дизайна от компании Golden Home';?>
<?php $keywords = 'ландшафтный дизайн, ландшафтный дизайн фото, ландшафтный дизайн участка, загородный ландшафтный дизайн, ландшафтный дизайн во владимире, фото ландшафтного дизайна участка';?>
<?php $breadcrumb = 'Ландшафтный дизайн';?>
<?php $root = '../';
include($root."blocks/meta.php");
include($root."blocks/header.php");?>

<div class="container">
	<?php include($root."blocks/breadcrumbs.php"); ?>
  <h1>Ландшафтный дизайн участка</h1>
  <p>Вы построили дом своей мечты. Сделали его уютным и непохожим на другие. Но без ландшафтного оформления он выглядит грустно и одиноко. Дом Вашей мечты достоин сада Вашей мечты. Доверьте эту работу профессионалам. Наши ландшафтные дизайнеры найдут идеальное решение. Устроят так, чтобы Ваш участок был гармоничным, красивым и функциональным. С учетом пожеланий заказчика «зеленые» дизайнеры спроектируют ландшафт «созвучный» с домом и максимально удовлетворяющий потребности всех членов Вашей семьи.</p>

<?php 
$photo_dir = '/image/design_land/';
$photo_alt = 'Фото ландшафтный дизайн участка';
$photo_col = 'col-xs-6 col-sm-3 col-lg-2'; 
include($root."blocks/photo-list.php");
?>
  
  <h2>Статьи про ландшафтный дизайн</h2>
	<div class="row">
      <div class="col-sm-6 col-md-3">
        <a href="/stati/trava-u-doma/" class="block-video">
          <img class="img-responsive" src="/image/teasers_article/land07.jpg" alt="Трава у дома">
          <span>Трава у дома</span>
        </a>
      </div>
      <div class="col-sm-6 col-md-3">
        <a href="/stati/sady-i-parki-mira/" class="block-video">
          <img class="img-responsive" src="/image/teasers_article/land06.jpg" alt="Сады и парки мира">
          <span>Сады и парки мира</span>
		</a>
      </div>
      <div class="col-sm-6 col-md-3">
        <a href="/stati/peshkom-po-sadu/" class="block-video">
          <img class="img-responsive" src="/image/teasers_article/land05.jpg" alt="Пешком по саду">
          <span><a href='/stati/peshkom-po-sadu/'>Пешком по саду</a></span>
        </a>
      </div>
      <div class="col-sm-6 col-md-3">
        <a href="/stati/znakomtes-alpinariy/" class="block-video">
          <img class="img-responsive" src="/image/teasers_article/land04.jpg" alt="Знакомьтесь: альпинарий">
          <span>Знакомьтесь: альпинарий</span>
        </a>
      </div>
      <div class="col-sm-6 col-md-3">
        <a href="/stati/vodnoe-carstvo/" class="block-video">
          <img class="img-responsive" src="/image/teasers_article/land03.jpg" alt="Водное царство">
          <span>Водное царство</span>
        </a>
      </div>
      <div class="col-sm-6 col-md-3">
        <a href="/stati/vesennie-hlopoty/" class="block-video">
          <img class="img-responsive" src="/image/teasers_article/land02.jpg" alt="Весенние хлопоты">
          <span>Весенние хлопоты</span>
        </a>
      </div>
      <div class="col-sm-6 col-md-3">
        <a href="/stati/aprel-lenivyh-ne-lyubit/" class="block-video">
          <img class="img-responsive" src="/image/teasers_article/land01.jpg" alt="Апрель ленивых не любит">
          <span>Апрель ленивых не любит</span>
        </a>
      </div>
	</div>
</div>
<?php include($root."blocks/footer.php");?>