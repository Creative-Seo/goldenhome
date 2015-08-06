<?php $title = 'Портфолио студии дизайна интерьера Golden Home';?>
<?php $description = 'Студия дизайна интерьеров Golden Home представляет Вам портфолио работ: ознакомьтесь с нашими проектами и фото по дизайну интерьеров и экстерьеров домов, коттеджей и квартир.и';?>
<?php $keywords = 'Дизайн-проекты, реализованные объекты, портфолио';?>
<?php $breadcrumb = 'Портфолио';?>
<?php $style="<style>
.dizayn{margin-left:0;margin-right:0;}
.dizayn a{text-decoration: none;color: #000;}
.cat-thumb a:hover, .cat-thumb a:focus {color: #888;}
.project-thumb div {
  height: 100px;
  margin-top: -50px;
  position: absolute;
  text-align: center;
  top: 50%;
  width: 100%;
}
.intro a img{
	opacity:1;
	-webkit-transition: opacity 0.3s;
	-moz-transition: opacity 0.3s;
	transition: opacity 0.3s;
}
.intro a:hover img, .intro a:focus img{opacity:0.5;}
.project-thumb figure {
  background-color: #000;
  border: 0 none;
  display: block;
  margin: 0;
  min-height: 200px;
  padding: 0;
  position: relative;
}
.project-thumb .butn {
  box-shadow: 0 0 5px 0 rgba(50, 50, 50, 0.25);
  line-height: 1.6;
  margin-bottom: 0;
  padding: 15px 30px 20px;
  pointer-events: none;
  z-index: 1;
  letter-spacing: 0.2em;
  text-transform: lowercase
}
.intro{margin:0;padding:0;}
.cat-thumb{padding:20px;}
.cat-thumb h1{text-indent:10px}
.headd2{
  background: rgba(0,0,0,0.8);
  box-sizing: border-box;
  font-size: 11px;
  padding: 10px 20px;
  transition: all 0.2s ease 0s;
  width: 100%;
  z-index: 100;
  color: #FFF;
}
h1{font: 32px 'grundfos_thesans_ot5r', Arial, Helvetica, sans-serif;margin: 0 0 9px;}
</style>";?>
<?php $root = $_SERVER['DOCUMENT_ROOT'];
include($root."/blocks/meta.php");
include($root."/blocks/header.php");?>

<div class="dizayn clearfix"> 
   <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12 intro">
   
   <div class="headd2"><h1>Наше портфолио</h1></div>
    <div class="cat-thumb">
     <?php include($root."/blocks/breadcrumbs.php");?>
     <p>Наша задача предложить клиенту такой интерьер, чтобы он, еще только взглянув на макет, сказал: «Это — то, что нужно! Моя мечта». Никто не поспорит: дома должно быть удобно. Поэтому дизайн продуман до мелочей. Мы поможем сделать исключительно Ваш стиль, ведь если просто следовать какой-то модной тенденции, интерьер получится безликим. Мы за индивидуальность. Представляем Вам свое портфолио.</p>
     
     <ul class="list-unstyled">
       <li><a href="#"><i class="fa fa-angle-right fa-2x"></i>ДИЗАЙН ГОСТИНОЙ</a></li>
       <li><a href="#"><i class="fa fa-angle-right fa-2x"></i>ДИЗАЙН СПАЛЬНИ</a></li>
       <li><a href="#"><i class="fa fa-angle-right fa-2x"></i>ДИЗАЙН ВАННОЙ</a></li>
       <li><a href="#"><i class="fa fa-angle-right fa-2x"></i>ДИЗАЙН КУХНИ</a></li>
       
     </ul>
     
    </div> 
   </div>
   
   <div class="project-thumb col-lg-6 col-md-6 col-sm-6 col-xs-12 intro">
      <a href="<?php echo HTTP_SERVER;?>dizayn-proekty/elegantnyy-interer-gostinoy-i-kuhni/">
      <figure class=" lazy animated zoomIn">
        <img src="<?php echo HTTP_SERVER;?>dizayn-proekty/elegantnyy-interer-gostinoy-i-kuhni/elegantnyy-interer-gostinoy-i-kuhni.jpg" class="img-responsive" alt="Двухкомнатная квартира с наливными полами" />
      </figure>
      <div><button class="butn"><span>Молоко и шоколад.</span><br>Элегантный интерьер гостиной и кухни.</button></div>
      </a>
   </div>
   
   <div class="project-thumb col-lg-6 col-md-6 col-sm-6 col-xs-12 intro">
      <a href="<?php echo HTTP_SERVER;?>dizayn-proekty/dvuhkomnatnaya-kvartira/">
      <figure class=" lazy animated zoomIn">
        <img src="<?php echo HTTP_SERVER;?>dizayn-proekty/dvuhkomnatnaya-kvartira/nalivnoy-pol-s-uzorom.jpg" class="img-responsive" alt="Двухкомнатная квартира с наливными полами" />
      </figure>
      <div><button class="butn"><span>Двухкомнатная квартира</span><br>с наливными полами</button></div>
      </a>
   </div>
   
   <div class="project-thumb col-lg-6 col-md-6 col-sm-6 col-xs-12 intro">
      <a href="<?php echo HTTP_SERVER;?>dizayn-proekty/kvartira-studiya/">
      <figure class=" lazy animated zoomIn">
        <img src="<?php echo HTTP_SERVER;?>dizayn-proekty/kvartira-studiya/kvartira-studiya.jpg"  class="img-responsive" alt=""/>
      </figure>
      <div><button class="butn"><span>Квартира-студия</span></button></div>
      </a>
   </div>
   <div class="project-thumb col-lg-6 col-md-6 col-sm-6 col-xs-12 intro">
      <a href="<?php echo HTTP_SERVER;?>dizayn-proekty/kvartira-v-evropeyskom-stile/">
      <figure class=" lazy animated zoomIn">
         <img src="<?php echo HTTP_SERVER;?>dizayn-proekty/kvartira-v-evropeyskom-stile/gostinaya-v-evropeyskom-stile.jpg" class="img-responsive" alt="Квартира в европейском стиле" />
      </figure>   
      <div><button class="butn"><span>Квартира</span><br>в европейском стиле</button></div>
      </a>
   </div>
   <div class="project-thumb col-lg-6 col-md-6 col-sm-6 col-xs-12 intro">
      <a href="<?php echo HTTP_SERVER;?>dizayn-proekty/dizayn-detskiy-komnaty/">
      <figure class=" lazy animated zoomIn">
         <img src="<?php echo HTTP_SERVER;?>dizayn-proekty/detskaya/dizayn-detskoy-komnaty.jpg" class="img-responsive" alt="Дизайн детской комнаты"/>
      </figure>   
      <div><button class="butn"><span>Дизайн</span><br>детской комнаты</button></div>
      </a>
   </div>
   <div class="project-thumb col-lg-6 col-md-6 col-sm-6 col-xs-12 intro">
      <a href="<?php echo HTTP_SERVER;?>dizayn-proekty/dizayn-dlya-molodoy-semi/">
      <figure class="lazy animated zoomIn">
         <img src="<?php echo HTTP_SERVER;?>dizayn-proekty/dizayn-dlya-molodoy-semi/dizayn-dlya-molodoy-semi.jpg" class="img-responsive" alt="Дизайн для молодой семьи"/>
      </figure>   
      <div><button class="butn"><span>Дизайн</span><br>для молодой семьи</button></div>
      </a>
   </div>
   <div class="project-thumb col-lg-6 col-md-6 col-sm-6 col-xs-12 intro">
      <a href="<?php echo HTTP_SERVER;?>dizayn-proekty/interer-v-zheltyh-tonah/">
      <figure class="lazy animated zoomIn">
         <img src="<?php echo HTTP_SERVER;?>dizayn-proekty/interer-v-zheltyh-tonah/interer-v-zheltyh-tonah.jpg" class="img-responsive" alt="Интерьер в желтых тонах"/>
      </figure>   
      <div><button class="butn"><span>Интерьер</span><br>в желтых тонах</button></div>
      </a>
   </div>
   <div class="project-thumb col-lg-6 col-md-6 col-sm-6 col-xs-12 intro">
      <a href="<?php echo HTTP_SERVER;?>dizayn-proekty/belaya-gostinaya/">
      <figure class="lazy animated zoomIn">
         <img src="<?php echo HTTP_SERVER;?>dizayn-proekty/belaya-gostinaya/belaya-gostinaya.jpg" class="img-responsive" alt="Интерьер в желтых тонах"/>
      </figure>   
      <div><button class="butn"><span>Белая</span><br>гостиная</button></div>
      </a>
   </div>
    <div class="project-thumb col-lg-6 col-md-6 col-sm-6 col-xs-12 intro">
      <a href="<?php echo HTTP_SERVER;?>dizayn-proekty/seraya-gostinaya/">
      <figure class="lazy animated zoomIn">
         <img src="<?php echo HTTP_SERVER;?>dizayn-proekty/seraya-gostinaya/seraya-gostinaya.jpg" class="img-responsive" alt="Серая гостиная"/>
      </figure>   
      <div><button class="butn"><span>Серая</span><br>гостиная</button></div>
      </a>
   </div>
   <div class="project-thumb col-lg-6 col-md-6 col-sm-6 col-xs-12 intro">
      <a href="<?php echo HTTP_SERVER;?>dizayn-proekty/interer-hi-tech/">
      <figure class="lazy animated zoomIn">
         <img src="<?php echo HTTP_SERVER;?>dizayn-proekty/interer-hi-tech/interer-hi-tech.jpg" class="img-responsive" alt="Интерьер в стиле Хай-Тек"/>
      </figure>   
      <div><button class="butn"><span>Интерьер</span><br>в стиле Хай-Тек</button></div>
      </a>
   </div>
   <div class="project-thumb col-lg-6 col-md-6 col-sm-6 col-xs-12 intro">
      <a href="<?php echo HTTP_SERVER;?>dizayn-proekty/kvartira-v-sovremennom-stile/">
      <figure class="lazy animated zoomIn">
         <img src="<?php echo HTTP_SERVER;?>dizayn-proekty/kvartira-v-sovremennom-stile/kvartira-v-sovremennom-stile.jpg" class="img-responsive" alt="Квартира в современном стиле"/>
      </figure>   
      <div><button class="butn"><span>Квартира</span><br>в современном стиле</button></div>
      </a>
   </div>
    <div class="project-thumb col-lg-6 col-md-6 col-sm-6 col-xs-12 intro">
      <a href="<?php echo HTTP_SERVER;?>dizayn-proekty/interer-kottedzha/">
      <figure class="lazy animated zoomIn">
         <img src="<?php echo HTTP_SERVER;?>dizayn-proekty/interer-kottedzha/interer-kottedzha.jpg" class="img-responsive" alt="Интерьер коттеджа"/>
      </figure>   
      <div><button class="butn"><span>Интерьер</span><br>коттеджа</button></div>
      </a>
   </div>
   <div class="project-thumb col-lg-6 col-md-6 col-sm-6 col-xs-12 intro">
      <a href="<?php echo HTTP_SERVER;?>dizayn-proekty/interer-zagorodnogo-doma/">
      <figure class="lazy animated zoomIn">
         <img src="<?php echo HTTP_SERVER;?>dizayn-proekty/interer-zagorodnogo-doma/interer-zagorodnogo-doma.jpg" class="img-responsive" alt="Интерьер загородного дома"/>
      </figure>   
      <div><button class="butn"><span>Интерьер</span><br>загородного дома</button></div>
      </a>
   </div>
   <div class="project-thumb col-lg-6 col-md-6 col-sm-6 col-xs-12 intro">
      <a href="<?php echo HTTP_SERVER;?>dizayn-proekty/salon-krasoty-estel/">
      <figure class="lazy animated zoomIn">
         <img src="<?php echo HTTP_SERVER;?>dizayn-proekty/salon-krasoty-estel/salon-krasoty-estel.jpg" class="img-responsive" alt="Салон красоты Estel"/>
      </figure>   
      <div><button class="butn"><span>Салон красоты</span><br>Estel</button></div>
      </a>
   </div>
   <div class="project-thumb col-lg-6 col-md-6 col-sm-6 col-xs-12 intro">
      <a href="<?php echo HTTP_SERVER;?>dizayn-proekty/salon-krasoty-milan/">
      <figure class="lazy animated zoomIn">
         <img src="<?php echo HTTP_SERVER;?>dizayn-proekty/salon-krasoty-milan/salon-krasoty-milan.jpg" class="img-responsive" alt="Салон красоты Milan"/>
      </figure>   
      <div><button class="butn"><span>Салон красоты</span><br>Milan</button></div>
      </a>
   </div>
    <div class="project-thumb col-lg-6 col-md-6 col-sm-6 col-xs-12 intro">
      <a href="<?php echo HTTP_SERVER;?>dizayn-proekty/stolovaya-loft/">
      <figure class="lazy animated zoomIn">
         <img src="<?php echo HTTP_SERVER;?>dizayn-proekty/stolovaya-loft/stolovaya-loft.jpg" class="img-responsive" alt="Столовая Loft"/>
      </figure>   
      <div><button class="butn"><span>Столовая</span><br>Loft</button></div>
      </a>
   </div>
    <div class="project-thumb col-lg-6 col-md-6 col-sm-6 col-xs-12 intro">
      <a href="<?php echo HTTP_SERVER;?>dizayn-proekty/dizayn-stomatologii/">
      <figure class="lazy animated zoomIn">
         <img src="<?php echo HTTP_SERVER;?>dizayn-proekty/dizayn-stomatologii/dizayn-stomatologii.jpg" class="img-responsive" alt="Дизайн стоматологии"/>
      </figure>   
      <div><button class="butn"><span>Дизайн</span><br>стоматологии</button></div>
      </a>
   </div>
    <div class="project-thumb col-lg-6 col-md-6 col-sm-6 col-xs-12 intro">
      <a href="<?php echo HTTP_SERVER;?>dizayn-proekty/stolovaya-teleperformance/">
      <figure class="lazy animated zoomIn">
         <img src="<?php echo HTTP_SERVER;?>dizayn-proekty/stolovaya-teleperformance/stolovaya-teleperformance.jpg" class="img-responsive" alt="Столовая teleperformance"/>
      </figure>   
      <div><button class="butn"><span>Столовая</span><br>teleperformance</button></div>
      </a>
   </div>
   <div class="project-thumb col-lg-6 col-md-6 col-sm-6 col-xs-12 intro">
      <a href="<?php echo HTTP_SERVER;?>dizayn-proekty/kafe-forest/">
      <figure class="lazy animated zoomIn">
         <img src="<?php echo HTTP_SERVER;?>dizayn-proekty/kafe-forest/kafe-forest.jpg" class="img-responsive" alt="Кафе< forest"/>
      </figure>   
      <div><button class="butn"><span>Кафе</span><br>forest</button></div>
      </a>
   </div>
   <div class="project-thumb col-lg-6 col-md-6 col-sm-6 col-xs-12 intro">
      <a href="<?php echo HTTP_SERVER;?>dizayn-proekty/bar/">
      <figure class="lazy animated zoomIn">
         <img src="<?php echo HTTP_SERVER;?>dizayn-proekty/bar/bar.jpg" class="img-responsive" alt="Бар"/>
      </figure>   
      <div><button class="butn"><span>Бар</span></button></div>
      </a>
   </div>

</div>
 
<?php include($root."/blocks/footer.php");?>