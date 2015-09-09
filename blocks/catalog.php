<?php 
// CATALOG
?>

<div id="catalog">
	<?php
		if(
			isset($routes[2]) && $routes[2] != "" && // if it's catalog
			( 
				!isset($routes[3]) || //and it's not a single product
			 	(isset($routes[3]) && $routes[3] == "") // check for ending slash, e.g.: /catalog/phones/
			) 
		)
			require_once("mini.php");
		elseif(isset($routes[3]) && $routes[3] != "") //else if it's a single product
			require_once("single.php");
	?>
</div>