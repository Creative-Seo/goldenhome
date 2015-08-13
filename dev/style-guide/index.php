<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="../css/style.css">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,800&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Cuprum:400,700&subset=latin,cyrillic' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="/libs/font-awesome/css/font-awesome.min.css">
	
</head>
<body>

<div class="container">
	<h1>Style Guide Golden Home</h1>

<!-- Typography -->
	<h2>General typography</h2>

	<h1>Заголовок H1<span class="type-label">36px</span><span class="type-label">$font-size-h1</span></h1>
	<h2>Заголовок H2<span class="type-label">30px</span><span class="type-label">$font-size-h2</span></h2>
	<h3>Заголовок H3<span class="type-label">24px</span><span class="type-label">$font-size-h3</span></h3>
	<div class="label">font-family: Roboto - $headings-font-family</div>
	<div class="label">font-weight: 700 - $headings-font-weight</div>
	
	<p>Параграф текста. Строительство домов под ключ - основное направление деятельности компании Golden Home. Мы строим загородные дома из различных материалов по самым современным технологиям. Стоимость строительства дома под ключ из газоблоков составляет сегодня в среднем от 18 500 р./кв.м. Цены на строительство домов и под ключ зависят, прежде всего, от метража, этажности, сложности реализации дизайна, конструкции и планировок, а также от выбора строительных и отделочных материалов.<span class="type-label">14px</span></p>
	
<!-- Typography -->

<!-- COLORS -->
	<h2>Color palette</h2>

	<div class="color-palette yellow">
		#ffd400
	</div>
	<div class="color-palette dark">
		#000
	</div>
<!-- COLORS -->

<!-- BUTTONS -->
	<h2>Buttons</h2>

	<button class="btn btn-default">Заказать</button><span class="type-label">class="btn btn-default"</span>

<!-- BUTTONS -->

<!-- Заказ обратного звонка -->

<div class="callback-form floating-labels">
    <a class="callback-form_close" href="javascript:;" title="Close"><i class="fa fa-times"></i></a>
	<div class="h3">Заказ обратного звонка</div>
	<div class="callback-form_note"> Заполните краткую контактную информацию. Наши сотрудники свяжутся с вами в рабочее время и ответят на все возникшие вопросы. </div>
	<div class="form-group icon">
		<label class="cd-label" for="cd-name">Имя</label>
		<input id="cd-name" class="user callback-form_phone form-control" type="text" required="" name="cd-name">
	</div>
	<div class="form-group icon">
		<label class="cd-label" for="cd-phone">Телефон</label>
		<input id="cd-phone" class="user callback-form_phone form-control" type="text" required="" name="cd-phone">
	</div>
	<button class="btn btn-default callback-form_button">Заказать звонок</button>
</div>

<!-- Заказ обратного звонка -->

</div>


	<script src="../libs/jquery/dist/jquery.min.js"></script>
	<script src="../js/modernizr.js"></script>
	<script src="../libs/bootstrap-sass/assets/javascripts/bootstrap.js"></script>
	<script src="../js/floating-labels.js"></script>
</body>
</html>