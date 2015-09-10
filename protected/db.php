<?php
// Store DB
	$store = array(
		'phones' => array(),
		'laptops' => array(),
		'tablets' => array(),
		'accessories' => array()
	);

	$news = array(
		1 => array(
			"title" => "Welcome!"
			"full" => "Welcome to our site! It's under construction now. We appologize for troubles."
		),
		2 => array(
			"title" => "Welcome!"
			"full" => "Welcome to our site! It's under construction now. We appologize for troubles."
		),
		3 => array(
			"title" => "Welcome!"
			"full" => "Welcome to our site! It's under construction now. We appologize for troubles."
		)
	);


	foreach($store as $k => $v) {
		for($i=1;$i<=15;$i++) {
			$new = array(
				'id' => $i
			);
			$new['id'] = $i;
			$new['price'] = mt_rand(100, 600).'.'.mt_rand(0, 9).mt_rand(0, 9);
			$store[$k][$i] = $new;
		}
	}
?>