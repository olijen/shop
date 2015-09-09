<?php

function d($t) {var_dump($t);}

$routes = explode('/', $_SERVER['REQUEST_URI']);

require_once 'layout.php';
