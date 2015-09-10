<?php
// news

require_once('/protected/db.php');
?>
<div class="news_list">
<h2>News:</h2>
<?php
//d($store['phones']);
foreach ($news as $r) { ?>
	<div class="news_item">
        <h3><?php echo $r['title']; ?></h3>
        <div class="date"><?php echo $r['date']; ?></div>
        <p><?php echo $r['full']; ?></p>
	</div>
<?php
}
?>
</div>