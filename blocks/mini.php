<div class="cards">
<?php
// Mini-card render

require_once('db.php');
$cat = $routes['2'];
//d($store['phones']);
foreach ($store[$cat] as $r) { ?>
	<div class="product mini">
		<div class="image"><img src="images/<?php echo $cat; ?>.png"></div>
        <div class="raiting">
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