<?php
// Mini-card render

require_once('db.php');
$cat = $routes['2'];
$id = $routes['3'];
//d($store['phones']);
?>
<h2>Details of <?php echo $cat.$id; ?>:</h2>
	<div class="product single">
		<div class="image"><img src="images/<?php echo $cat; ?>.png"></div>
        <div class="clear"></div>
        <div class="information">
            <h2><?php echo $cat.$id; ?></h2>
			<p><span class="features">Manufacturer:</span> SITIO Group</p>
			<p><span class="features">Model:</span> Fantomasik</p>
        </div>
		<div class="price">Price: <?php echo $store[$cat][$id]['price']; ?>$</div>
		<a href="#" class="buy">Buy</a>
	</div>
<br>
<h2>Reviews:</h2>