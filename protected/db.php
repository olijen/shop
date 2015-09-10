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
			"title" => "Welcome!",
			"full" => "Welcome to our site! It's under construction now. We appologize for troubles.",
			"date" => "09.09.2015"
		),
		2 => array(
			"title" => "We are working on it",
			"full" => "Today we made styling, back-end and some front-end corrections on site. Hope you will like it!",
			"date" => "09.09.2015"
		),
		3 => array(
			"title" => "New features!",
			"full" => "Today we planing to add new features and try to finish them at 6 p.m.",
			"date" => "10.09.2015"
		)
	);

	$reviews = array (
		1 => array(
			"product_id" => 1,
			"author" => "Demid Ganenko",
			"date" => "10.09.2015",
			"text" => ""
		),
		2 => array(
			"product_id" => 1,
			"author" => "Eugene Zhylin",
			"date" => "10.09.2015",
			"text" => ""
		),
		3 => array(
			"product_id" => 1,
			"author" => "Bogdan Goroh",
			"date" => "10.09.2015",
			"text" => ""
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