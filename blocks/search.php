<?php
// search products

require_once("protected/db.php");
$s = strtolower($routes[2]);

//news

$founded = false;
$counter = 0;

echo '<h2>Search in News:</h2>';
echo '<div class="search">';


foreach($news as $r) {
	foreach($r as $a) {
		$find = strpos(strtolower($a), $s);
		//$find = strpos(strtolower($a), $s);
		if($find!==false)
			$founded = true;
	}
	if($founded==true) {
		$counter++;
		echo '<div class="result">';
		echo '<a href="news/'.$r['id'].'/">';
		echo '<h4>'.$r['title'].'</h4>';
		echo '<p>'.$r['full'].'</p>';
		echo '<div class="date">'.$r['date'].'</div>';
		echo '</a>';
		echo '</div>';
		
		$founded = false;
	}
}

if($counter==0)
	echo "No results";



//products

$founded = false;
$counter = 0;

echo '<h2>Search in Products:</h2>';
echo '<div class="search">';


foreach($store as $cat => $cat_n) {
	foreach($store[$cat] as $cat_k => $cat_v) {
		foreach($store[$cat][$cat_k] as $ph_k => $ph_v) {
			$find = strpos(strtolower($store[$cat][$cat_k]['id']), $s);
			//$find = strpos(strtolower($a), $s);
			if($find!==false)
				$founded = true;
		}
		
		if($founded==true) {
			$counter++;
			echo '<div class="result">';
			echo '<a href="catalog/'.$cat.'/'.$cat_k.'">';
			echo '<h4>'.$cat.$store[$cat][$cat_k]["id"].'</h4>';
			echo '<div class="category">Category: '.$cat.'</div>';
			echo '<div class="pr">Price: '.$store[$cat][$cat_k]["price"].'$</div>';
			echo '</a>';
			echo '</div>';

			$founded = false;
		}
	}
}

if($counter==0)
	echo "No results";



?>


<hr>
