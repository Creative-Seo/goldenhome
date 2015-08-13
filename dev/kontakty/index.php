<?php $title = '«Golden Home» - информация о компании. Контакты, адреса офисов, схема проезда, обратная связь, дополнительные контакты.';
	$description = 'Контакты - Строительная компания Golden Home';
	$keywords = 'Контакты';?>
<?php $dirs = array ();?>
<?php
$root = '../';
$breadcrumb = 'Проекты домов';
include($root."blocks/meta.php"); 
include($root."blocks/header.php"); 
?>
<div class="contacts">
<div class="container">
  <div class="row">
    <h1>Контактная информация</h1>
  </div>
  <div class="row">
    <div class="contacts-city center-block" id="myTab">
      <ul id="myTab">
       <li class="contacts-city-button"><a href="#vladimir" aria-controls="home" role="tab" data-toggle="tab">Владимир</a></li>
       <li class="contacts-city-button"><a href="#ivanovo" aria-controls="home" role="tab" data-toggle="tab">Иваново</a></li>
      </ul>
    </div>    
  </div>
  
</div>
<div class="container-fluid">
<div class="row">
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane fade" id="vladimir">

       <div class="contacts_phone">
        <div><i class="fa fa-phone"></i>+7 (4922) 37-73-90</div>
        <div class="contacts_mail"><i class="fa fa-paper-plane"></i><a href="mailto:goldenhome33@mail.ru">goldenhome33@mail.ru</a></div>
        <div class="contacts_phone_descr">по вопросам строительства и продажи домов</div>
       </div>

       <div class="line center-block"></div>

       <div class="contacts_phone">
        <div><i class="fa fa-phone"></i>+7 (4922) 37-73-92</div>
        <div class="contacts_phone_descr">по проектам домов</div>
       </div>

       <div class="line center-block"></div>

       <div class="contacts_phone">
        <div><i class="fa fa-phone"></i>+7 (4922) 37-73-91</div>
        <div class="contacts_mail"><i class="fa fa-paper-plane"></i><a href="mailto:design@gh33.ru">design@gh33.ru</a></div>
        <div class="contacts_phone_descr">по дизайну интерьера</div>
       </div>

       <div class="line center-block"></div>

       <div class="contacts_phone">
        <div><i class="fa fa-hourglass-o"></i>Время работы: </div>
        <div class="contacts_phone_descr">пн-пт 09:00-18:00, сб.вс. - выходной</div>
       </div>

       <div class="line center-block"></div>

       <div class="contacts_phone">
        <div><i class="fa fa-map-marker"></i>Адрес: </div>
        <div class="contacts_phone_descr">600017, г. Bлaдимиp, ул. Мира, д. 15 В, офис 12, 3 этаж (Деловой центр «Консоль»)</div>
       </div>

       <div class="line center-block"></div>

       <div class="contacts_map">
         <script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=9UmBXK82LmOHB7PR7120e5LGdSUMR-8Y&width=auto&height=450"></script>
       </div>

      </div>
      <div role="tabpanel" class="tab-pane fade" id="ivanovo">
       <div class="contacts_phone">
        <div><i class="fa fa-phone"></i>+7 (4932) 92-90-99</div>

        <div class="line center-block"></div>

        <div class="contacts_phone">
          <div class="contacts_mail"><i class="fa fa-paper-plane"></i><a href="mailto:info@sk-goldenhome.ru">info@sk-goldenhome.ru</a></div>
        </div>

        <div class="line center-block"></div>

        <div class="contacts_phone">
          <div><i class="fa fa-hourglass-o"></i>Время работы: </div>
          <div class="contacts_phone_descr">пн-пт 09:00-18:00, сб.вс. - выходной</div>
        </div>

        <div class="line center-block"></div>

        <div class="contacts_phone">
          <div><i class="fa fa-map-marker"></i>Адрес: </div>
          <div class="contacts_phone_descr">153009, г. Иваново, ул. Лежневская,д.183, оф. 407 (ТД «Славянский»)</div>
        </div>

        <div class="line center-block"></div>

        <div class="contacts_map">
          <script type="text/javascript" charset="utf-8" src="//api-maps.yandex.ru/services/constructor/1.0/js/?sid=pS5Ida2yCLSPdFcapOs9iOBHXqvr9yZb&width=auto&height=450"></script>
        </div>


       </div>
      </div>
    </div>
</div>
</div>

</div> <!-- contacts -->

<?php include($root."blocks/footer.php");?>
<script type="text/javascript">
$(document).ready(function(){ 
    $("#myTab li:eq(0) a").tab('show');
});
</script>

