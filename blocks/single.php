<?php
// Mini-card render

require_once('db.php');
$cat = $routes['3'];
$id = $routes['4'];
//d($store['phones']);
?>
	<div class="product single">
		<div class="image">img src="<?php echo $cat; ?>"</div>
		<div class="price">Price: <?php echo $store[$cat][$id]['price']; ?>$</div>
	</div>