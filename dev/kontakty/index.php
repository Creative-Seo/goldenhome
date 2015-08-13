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
<div class="container contacts">
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
  <div class="row">
    <div class="tab-content">
      <div role="tabpanel" class="tab-pane" id="vladimir">asdasdsad</div>
      <div role="tabpanel" class="tab-pane" id="ivanovo">asdsasd</div>
    </div>
  </div>
</div>

<?php include($root."blocks/footer.php");?>
<script type="text/javascript">
$(document).ready(function(){ 
    $("#myTab li:eq(0) a").tab('show');
});
</script>

