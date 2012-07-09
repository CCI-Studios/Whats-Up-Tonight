<? if (!isset($up)) {
	$up = $ups->current();
} ?>

<div class="span4 com_wut-upInstance"><div>
	<div <?= (isset($height))? "style='height: $height'":'' ?>>
		<h3><?= $up->title ?></h3>
		
		<div class="description1">
			<div class="logo">
				<?= $up->location->image(); ?>
			</div>

			<div class="description"><?= $up->intro ?></div>
		</div>

		<div class="description2">
			<h4><?= $up->subtitle ?></h4>
			<p><?= $up->short ?></p>
			<p><a href="<?= @route("view=up&{$upid}&id={$up->id}") ?>">
				<?= @text('Read more') ?>
			</a></p>
		</div>

		<div class="details"><div class="button">
			Details
			<img src="/images/arrowDown.png" width="10" height="8" alt="arrowDown">
		</div></div>
	</div>
</div></div>