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
<?php 
if(
			isset($routes[2]) && $routes[2] != "" && // if it's catalog
			( 
				!isset($routes[3]) || //and it's not a single product
			 	(isset($routes[3]) && $routes[3] == "") // check for ending slash, e.g.: /catalog/phones/
			) 
		) { ?>
		<script type="text/template" id="product-template">
			
			<div class="thumbnail">
				<a href="catalog/<%- catalog %>/<%- id %>">
					<div class="image">
						<img src="<%- img %>">
					</div>
				</a>

				<div class="caption">
					<h3><%- title %></h3>
					<div class="rating">
						<div class="star"></div>
						<div class="star"></div>
						<div class="star"></div>
						<div class="star"></div>
						<div class="star"></div>
					</div>
					<div class="price">Price: <%- price %>$</div>
					<p>
						<a href="#" class="btn btn-primary" role="button">BUY</a>
					</p>
				</div>
			</div>
					
		</script>
		<script src="js/lib/jquery-1.7.1.js"></script>
		<script src="js/lib/underscore.js"></script>
		<script src="js/lib/backbone.js"></script>
		<script src="js/lib/backbone.localStorage.js"></script>
		<script src="js/models/product.js"></script>
		<script src="js/collections/products.js"></script>
		<script src="js/views/products.js"></script>
		<script src="js/views/app.js"></script>
		<script src="js/app.js"></script>
<?php } ?>