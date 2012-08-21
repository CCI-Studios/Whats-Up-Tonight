<div class="prev"><div data-date="<?= $prev ?>">
	<a href="<?= @route("view=ups&{$itemid}&date={$prev}") ?>"></a>
</div></div>

<div class="dates"><div>
	<? foreach($days as $index=>$day): ?>
		<div 
			data-date="<?= date('Y-m-d', $day['date']) ?>"
			<?= ($index == 3)? 'class="featured"':'' ?>>
			<a 
				href="<?= @route("view=ups&{$itemid}&date=". date('Y-m-d', $day['date'])) ?>">
				<div class="month"><?= date('M', $day['date']) ?></div>
				<div class="day"><?= date('l', $day['date']) ?></div>
				<div class="date"><?= date('d', $day['date']) ?></div>
				<div class="ups"><?= $day['count'] ?><?= ($day['count'] == 1)? ' UP':' UPs' ?></div>

				<div class="logo-featured"></div>
			</a>
		</div>
	<? endforeach; ?>
</div></div>

<div class="next"><div data-date="<?= $next ?>">
	<a href="<?= @route("view=ups&{$itemid}&date={$next}") ?>"></a>
</div></div>