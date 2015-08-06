<?php
error_reporting(0);

// Ключ
define('KEY', 'xZuyP93oNVpiNx4w4EemBxbFvGNFgWah');

// Разрешаем доступ только тем, кто знает ключ
if ($_POST['key'] != KEY) { header('HTTP/1.0 404 Not Found'); exit(); }

// POST VARS
$n = (isset($_POST['n'])) ? _fd($_POST['n']) : '';
$t = (isset($_POST['t'])) ? _fd($_POST['t']) : '';
$k = (isset($_POST['k'])) ? _fd($_POST['k']) : '';
$m = (isset($_POST['m'])) ? _fd($_POST['m']) : '';
$nomer = (isset($_POST['nomer'])) ? _fd($_POST['nomer']) : '';

// MESSAGE BODY
$body = '';
if(!empty($n) || !empty($t)) {
	$body .= '<h1>Заказ блоков</h1>'."\n";
	if(!empty($n)) $body .= 'Имя: '.$n."<br />\n";
	if(!empty($t)) $body .= 'Телефон: '.$t."\n";
	if(!empty($k)) $body .= 'Количество блоков: '.$k."\n";
	$body .= 'Блоки: '.$nomer."\n";
	$body .= 'Комментарий: '.$m."\n";
	$body .= "<hr />\n";
}

$to = 'info@sk-goldenhome.ru';
$subject = 'Заказ блоков';
$body = <<<EOF
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Заказ блоков</title>
</head>
<body>
	{$body}
</body>
</html>
EOF;

$headers  = "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html; charset=UTF-8\r\n";
$headers .= "From: SITE <info@sk-goldenhome.ru>\r\n";

if(mail($to, $subject, $body, $headers))
	echo "Ваше сообщение отправлено!\nВ ближайшее время мы с вами свяжемся.";
else
	echo "Ошибка отправки данных!";


// FILTER
function _fd($str) {
	return trim(strip_tags(addslashes(trim($str))));
}

?>