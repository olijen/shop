<<<<<<< HEAD
<div class="cards">
=======

>>>>>>> 82788f530802e8535e0d5d0bcd29de4f86ba496f
<?php
// Mini-card render

require_once('db.php');
$cat = $routes['2'];
?>
<h2>Catalog <?php echo $cat; ?>: </h2>
<?php
//d($store['phones']);
foreach ($store[$cat] as $r) { ?>
	<div class="product mini">
<<<<<<< HEAD
		<div class="image"><img src="images/<?php echo $cat; ?>.png"></div>
=======
		<a href="catalog/<?php echo $cat; ?>/<?php echo $r['id']; ?>"><div class="image"><img src="images/<?php echo $cat; ?>.jpg"></div></a>
>>>>>>> 82788f530802e8535e0d5d0bcd29de4f86ba496f
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