<div class="com_wut-ups">
	<? if (count($ups)): ?>
		<div class="row">
		<? foreach($ups as $up): ?>
			<?= @template('widget', array('up'=>$up)); ?>
		<? endforeach; ?>
		</div>
	<? else: ?>
		<? if (!count($ups)): ?>
			<h1>No UPs available</h1>
			<p>There are no UPs available on this date.</p>
		<? endif; ?>
	<? endif; ?>
</div>