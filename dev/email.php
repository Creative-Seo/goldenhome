<?php
error_reporting(0);

// Ключ
define('KEY', 'uZuyP93oNVpiNx4w4Ee6BxbFvGNFgWah');

// Разрешаем доступ только тем, кто знает ключ
if ($_POST['key'] != KEY) { header('HTTP/1.0 404 Not Found'); exit(); }

// POST VARS
$n = (isset($_POST['n'])) ? _fd($_POST['n']) : '';
$t = (isset($_POST['t'])) ? _fd($_POST['t']) : '';
$tel = (isset($_POST['tel'])) ? _fd($_POST['tel']) : '';
$email = (isset($_POST['email'])) ? _fd($_POST['email']) : '';
$col = (isset($_POST['col'])) ? _fd($_POST['col']) : '';
$ta = (isset($_POST['ta'])) ? _fd($_POST['ta']) : '';

// MESSAGE BODY
$body = '';
if(!empty($n) || !empty($t)) {
	$body .= '<h1>'.$t.'</h1>'."<br>\n";
	if(!empty($n)) $body .= '<p>Имя: '.$n."</p>\n";
	if(!empty($tel)) $body .= '<p>Телефон: '.$tel."</p>\n";
	if(!empty($email)) $body .= '<p>E-mail: '.$email."</p>\n";
	if(!empty($col)) $body .= '<p>Количество блоков: '.$col."</p>\n";
	if(!empty($ta)) $body .= '<p>Вопрос: '.$ta."</p>\n";
	$body .= "<hr>\n";
}

$to = 'info@sk-goldenhome.ru';
$subject = 'Сообщение с сайта';
$body = <<<EOF
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Сообщение с сайта</title>
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
	echo true;
else
	echo false;

// FILTER
function _fd($str) {
	return trim(strip_tags(addslashes(trim($str))));
}

?>
