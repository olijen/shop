<?php
// Mini-card render

require_once('protected/db.php');
$cat = $routes[2];
$id = $routes[3];
//d($store['phones']);
?>

<section>
    <h2>
        Details of <?php echo $cat.$id; ?>:
    </h2>
    <div class="product single row">
        <div class="col-xs-12 col-sm-8 image">
            <img class="img" src="images/<?php echo $cat; ?>.png">
        </div>
        <div class="col-xs-12 col-sm-4 information">
            <h2><?php echo $cat.$id; ?></h2>
            <p>
                <span class="features">Manufacturer:</span> SITIO Group
            </p>
            <p>
                <span class="features">Model:</span> Fantomasik
            </p>
            <p>
                <span class="features">Other:</span> Information
            </p>
            <p class="price">
                Price: <?php echo $store[$cat][$id]['price']; ?>$
            </p>
            <a href="#" class="btn btn-primary">Buy</a>
        </div>
    </div>
</section>
<section class="reviews row">
    <div class="col-xs-12 col-md-6">

        <h2>Reviews:</h2>
        <div class="review">
            <?php
            //d($store['phones']);
            foreach ($reviews as $r) { ?>
                <div class="comment">
                    <h3><?php echo $r['author']; ?></h3>
                    <p><?php echo $r['text']; ?></p>
                    <div class="rate">Rated: <?php echo $r['rating']; ?>/5</div>
                    <div class="date"><?php echo $r['date']; ?></div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>

</section>
