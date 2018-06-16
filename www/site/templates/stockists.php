<?php snippet('header') ?>

<div id="menu">
	<a href="<?= $site->url() ?>">Back</a>
</div>

<div id="stockists">
<div id="letters">
	<?php foreach(range('A','Z') as $letter): ?>
		<div class="letter">
			<div><?= $letter ?></div>
			<?php foreach($countries as $key => $country): ?>
				<?php if($letter == ucfirst($country->title()->value())[0]): ?>
				<div class="country">
					<div><?= $country->title()->html().' :' ?></div>
					<div class="cities">
						<?php foreach ($country->children()->visible() as $key => $city): ?>
							<div class="city">
								<strong><?= $city->title()->html() ?></strong>
								<?php foreach ($city->children()->visible() as $key => $s): ?>
									<a href="<?= $s->link() ?>"><?= $s->title()->html() ?></a>
								<?php endforeach ?>
							</div>
						<?php endforeach ?>
					</div>
				</div>
				<?php endif ?>
			<?php endforeach ?>
		</div>
	<?php endforeach ?>
</div>
</div>

<?php snippet('footer') ?>