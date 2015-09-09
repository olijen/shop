<?php
// Mini-card render

require_once('db.php');
$cat = $routes['2'];
$id = $routes['3'];
//d($store['phones']);
?>
	<div class="product single">
		<div class="image">img src="<?php echo $cat; ?>"</div>
		<div class="price">Price: <?php echo $store[$cat][$id]['price']; ?>$</div>
	</div>