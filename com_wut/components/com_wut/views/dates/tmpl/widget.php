<style src="media://com_wut/css/com_wut_site.css" />

<div class="mod_wutdates" data-date="<?= $current ?>">
	<div class="prev"><div>
		<a href="<?= @route("view=ups&{$itemid}&date={$prev}") ?>"></a>
	</div></div>

	<div class="dates"><div>
		<? foreach($days as $day): ?>
			<div 
				data-date="<?= date('Y-m-d', $day['date']) ?>">
				<a href="<?= @route("view=ups&{$itemid}&date=". date('Y-m-d', $day['date'])) ?>">
					<div class="day"><?= date('l', $day['date']) ?></div>
					<div class="date"><?= date('d', $day['date']) ?></div>
					<div class="ups"><?= $day['count'] ?><?= ($day['count'] > 1)? ' UPs':' UP' ?></div>
				</a>
			</div>
		<? endforeach; ?>
	</div></div>

	<div class="next"><div>
		<a href="<?= @route("view=ups&{$itemid}&date={$next}") ?>"></a>
	</div></div>
</div>