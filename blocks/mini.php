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
	<div class="row">
<?php
//d($store['phones']);
$counter = 1;
foreach ($store[$cat] as $r) { ?>
	<?php /*if($counter%3==1) { ?><div class="row"><?php } */?>
	<div class="product col-sm-4">
        <div class="thumbnail">
            <a href="catalog/<?php echo $cat; ?>/<?php echo $r['id']; ?>">
                <div class="image">
                    <img src="images/<?php echo $cat; ?>.png">
                </div>
            </a>

            <div class="caption">
                <h3>Title product</h3>
                <div class="rating">
					<input type="radio">
					<input type="radio">
					<input type="radio">
					<input type="radio">
					<input type="radio">
				</div>
                <div class="price">Price: <?php echo $r['price']; ?>$</div>
                <p>
                    <a href="#" class="btn btn-primary" role="button">BUY</a>
                </p>
            </div>
        </div>
	</div>
	<?php /*if($counter%3==0) { ?></div><?php } */?>
<?php
	$counter++;
}
?>
	</div>
</div>
