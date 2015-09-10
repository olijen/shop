<div class="cards">
<?php
// Mini-card render

require_once('protected/db.php');
$cat = $routes[2];
?>
<h2>Catalog <?php echo $cat; ?>: </h2>
Sort by price:
<select class="sort">
	<option value="1">Cheap to expensive</option>
	<option value="2">Expensive to cheap</option>
</select>
<br>
<?php
//d($store['phones']);
foreach ($store[$cat] as $r) { ?>
	<div class="product mini">
		<a href="catalog/<?php echo $cat; ?>/<?php echo $r['id']; ?>"><div class="image"><img src="images/<?php echo $cat; ?>.png"></div></a>
        <div class="rating">
            <input type="radio">
            <input type="radio">
            <input type="radio">
            <input type="radio">
            <input type="radio">
        </div>
		<div class="price">Price: <?php echo $r['price']; ?>$</div>

        <a href="#" class="buy">Buy</a>
	</div>
<?php
}
?>
</div>