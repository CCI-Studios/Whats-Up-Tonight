<div class="com_wut-ups">
	<? if (count($ups)): ?>
		<div class="row">
		<? foreach($ups as $up): ?>
			<?= @template('widget', array('up'=>$up)); ?>
		<? endforeach; ?>
		</div>
	<? else: ?>
		<? if (!count($ups)): ?>
			<div class="row">
				<div class="span12 com_wut-upInstance"><div>
					<div>
						<h3>No UPs Available</h3>
						<p>There are no UPs available for this date. Please choose another date.</p>
					</div>
				</div></div>
			</div>
		<? endif; ?>
	<? endif; ?>
</div>