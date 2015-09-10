<?php
// search products

require_once("protected/db.php");
$s = $routes[2];

$founded = false;

foreach($news as $r) {
	foreach($r as $a) {
		$find = strpos($a, $s);
		if($find==true)
			$founded = true;
	}
	if($founded==true)
		echo $r['title'];
}



?>