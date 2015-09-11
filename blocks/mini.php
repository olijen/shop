<div class="cards">
<?php
// Mini-card render

require_once('protected/db.php');
$cat = $routes[2];
?>
<h2>Catalog <?php echo $cat; ?>: </h2>
<label for="sel1">Sort by price:</label>
<select class="form-control sort" id="sel1" style="width: 300px">
	<option value="1">Cheap to expensive</option>
	<option value="2">Expensive to cheap</option>
</select>
<br>
	<div class="row">
<?php
$counter = 1;
foreach ($store[$cat] as $r) { ?>
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
					<div class="star"></div>
					<div class="star"></div>
					<div class="star"></div>
					<div class="star"></div>
					<div class="star"></div>
				</div>
                <div class="price">Price: <?php echo $r['price']; ?>$</div>
                <p>
                    <a href="#" class="btn btn-primary" role="button">BUY</a>
                </p>
            </div>
        </div>
	</div>
<?php
	$counter++;
}
?>
	</div>
</div>
