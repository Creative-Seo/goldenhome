<?php 
$self = explode("/", $_SERVER['REQUEST_URI']);
define('HTTP_SERVER', 'http://'.$_SERVER['HTTP_HOST'].'/');
define('HTTP_ID', $self[count($self)-2].'/');
define('HTTP_URL', HTTP_SERVER.ltrim($_SERVER['REQUEST_URI'], '/'));
define('HTTP_URL_IMG', HTTP_URL.'img/');

$menu = json_decode('[
{"name":"dropdown", "n": "Строительство", "li":[
	{"name":"Строительство","url":"/stroitelstvo/"},
	{"name":"Проекты домов","url":"/proekty-domov/"},
	{"name":"Дома из газобетона","url":"/iz-gazobetona/"},
	{"name":"Кирпичные дома","url":"/kirpichnye-doma/"},
	{"name":"Фундамент","url":"/fundament/"},
	{"name":"Стоимость строительства","url":"/price/"},
	{"name":"Проект обоснования сметы","url":"/obrazec-proekta/"},
	{"name":"Загородные дома","url":"/zagorodnye-doma/"}
]},
{"name":"Продажа домов","url":"/kupit-dom/"},
{"name":"dropdown", "n": "Дизайн", "li":[
	{"name":"Дизайн интерьера","url":"/dizayn-interera/"},
	{"name":"Портфолио","url":"/dizayn-proekty/"},
	{"name":"Прайс-лист","url":"/prays-na-dizayn-proekt/"},
	{"name":"gr"},
	{"name":"Роспись интерьеров","url":"/rospis-intererov-i-fasadov/"},
	{"name":"Картины на холсте","url":"/kartiny-na-holste/"},
	{"name":"Ландшафтный дизайн","url":"/landshaftnyy-dizayn/"},
	{"name":"Отделочные работы","url":"/otdelka-doma/"},
	{"name":"Статьи","url":"/stati/"}
]},
{"name":"dropdown", "n": "Газобетон", "li":[
	{"name":"Газобетонные блоки","url":"/gazobloki/"},
	{"name":"Блоки Ytong","url":"/gazobloki-ytong/"},
	{"name":"Блоки Bonolit","url":"/gazobloki-bonolit/"},
	{"name":"Калькулятор стоимости Bonolit","url":"/raschet-gazobetona/"},
	{"name":"Фотографии объектов","url":"/foto-obektov/"},
	{"name":"Частые вопросы","url":"/faq/"}
]},
{"name":"dropdown", "n": "О компании", "li":[
	{"name":"О компании","url":"/o-kompanii/"},
	{"name":"Наши сотрудники","url":"/nashi-sotrudniki/"},
	{"name":"Наши партнеры","url":"/nashi-partnery/"},
	{"name":"Отзывы","url":"/otzyvy/"},
	{"name":"Видео-ролики","url":"/video/"},
	{"name":"Фотоотчеты","url":"/foto-otchety/"},
	{"name":"Журнал «Golden Home»","url":"/zhurnal-o-dizayne/"},
	{"name":"Видео-журнал","url":"/video-o-dizayne/"},
	{"name":"Рекламный буклет","url":"/reklamnyy-buklet/"},
	{"name":"Частые вопросы","url":"/faq/"}
]},
{"name":"Контакты","url":"/kontakty/"}
    ]',true);
 ?>