<?php
// Mini-card render

require_once('db.php');
$cat = $routes['2'];
//d($store['phones']);
foreach ($store[$cat] as $r) { ?>
	<div class="product mini">
		<div class="image">img src="<?php echo $cat; ?>"</div>
		<div class="price">Price: <?php echo $r['price']; ?>$</div>
	</div>
<?php
}
?>