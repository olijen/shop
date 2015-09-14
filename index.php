<?php

//Все запросы на сервер будут проходить через index.php

error_reporting(E_ALL); //Всегда включаем отображение ошибок всех уровней

function d($t) {var_dump($t);}

//Используется для отображения блока.
//Принимает массив с переменными, которые нужно использовать внутри.
//имейте ввиду, что внутри этой функции своя область видимости.

function renderBlock($tpl, $data = array())
{
	extract($data); //Превращаем массив в переменные по ключ-значение.
	include($_SERVER['DOCUMENT_ROOT'] . '/blocks/' . $tpl . '.php');//Подключаем файл из дирректории блоков.
}

$routes = explode('/', $_SERVER['REQUEST_URI']); //Получаем строку с URI и разбиваем на массив по слешу.
$block = $routes[1] ? $routes[1] : 'main';

if($routes[1] == "api") {
	require_once('protected/db.php');
	$api_cat = $_GET['catalog'];
	$arr = array();
	$i = 0;
	
	foreach($store[$api_cat] as $r) {
		$arr[$i] = $r;
		$i++;
	}
	
	//$resp = json_encode($store[$api_cat]);
	$resp = json_encode($arr);
	//$resp = json_encode(array('id'=> mt_rand(1, 9), 'price' => mt_rand(1, 9)));
	die($resp);
}

renderBlock('layout', array('block' => $block, 'routes' => $routes));

?>