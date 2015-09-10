<?php
// news

require_once('protected/db.php');
?>
<div class="news_list">
<h2>News</h2>
<?php
//d($store['phones']);
if($routes[1] != "news") {
	foreach ($news as $r) { ?>
		<div class="news_item">
			<a href="news/<?php echo $r['id']; ?>">
			<h3><?php echo $r['title']; ?></h3>
			<div class="date"><?php echo $r['date']; ?></div>
			<p><?php echo $r['full']; ?></p>
			</a>
		</div>
	<?php
	}
}
elseif($routes[1] == "news" && isset($routes[2])) {
	$id = $routes[2]; ?>
		<div class="news_item">
			<h3><?php echo $news[$id]['title']; ?></h3>
			<div class="date"><?php echo $news[$id]['date']; ?></div>
			<p><?php echo $news[$id]['full']; ?></p>
		</div>
	<?php
}
?>
</div>