<div class="com_wut-ups">
	<? if (count($ups)): ?>
		<div class="row">
		<? foreach($ups as $up): ?>
			<div class="span4"><div>
				<div style="height: <?= $height ?>">
					<h3><?= $up->title ?></h3>
					
					<div class="description1">
						<div class="logo">
							<?= $up->location->image(); ?>
						</div>

						<p>
							<?= ($up->eats)? 'eats':'' ?>
							<?= ($up->drinks)? 'drinks':'' ?>
							<?= ($up->entertainment)? 'entertainment':'' ?>
							<?= ($up->events)? 'events':'' ?>
							<?= ($up->otbs)? 'otbs':'' ?>
						</p>

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
		<? endforeach; ?>
		</div>
	<? else: ?>
		<? if (!count($ups)): ?>
			<h1>No UPs available</h1>
			<p>There are no UPs available on this date.</p>
		<? endif; ?>
	<? endif; ?>
</div>