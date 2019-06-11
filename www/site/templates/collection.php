<?php snippet('header') ?>

<div id="menu">
	<a href="<?= $site->url() ?>">Back</a>
	<?php foreach ($page->parent()->children()->visible() as $key => $collection): ?>
		<a href="<?= $collection->url() ?>" <?php e($page->is($collection), 'class="active"') ?>><?= $collection->title()->html() ?></a>
	<?php endforeach ?>
</div>

<div id="collection">
  <?php if ($page->text()->isNotEmpty()): ?>
    <div class="responsive-image"><?= $page->text()->kt() ?></div>
  <?php endif ?>
	<?php foreach ($page->medias()->toStructure() as $key => $m): ?>
		<?php snippet('responsive-image', ['field' => $m, 'preload' => true]) ?>
	<?php endforeach ?>
</div>

<?php snippet('footer') ?>
