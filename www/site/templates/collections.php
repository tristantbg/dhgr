<?php snippet('header') ?>

<div id="menu">
	<a href="<?= $site->url() ?>">Back</a>
	<?php foreach ($page->children()->visible() as $key => $collection): ?>
		<a href="<?= $collection->url() ?>"><?= $collection->title()->html() ?></a>
	<?php endforeach ?>
</div>

<?php snippet('footer') ?>