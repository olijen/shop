<?php 
// CATALOG
?>

<div id="catalog">
	Catalog here
	<?php
		if(
			isset($routes[3]) && $routes[3] != "" && // if it's catalog
			( 
				!isset($routes[4]) || //and it's not a single product
			 	(isset($routes[4]) && $routes[4] == "") // check for ending slash, e.g.: /catalog/phones/
			) 
		)
			require_once("mini.php");
		elseif(isset($routes[4]) && $routes[4] != "") //else if it's a single product
			require_once("single.php");
	?>
</div>