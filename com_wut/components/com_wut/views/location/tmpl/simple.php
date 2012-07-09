<div class="mediablock clearfix">
	<div class="media">
		<? if ($location->website): ?>
			<a href="<?= $location->website ?>" target="_blank">
				<?= $location->image() ?>
			</a>
		<? else: ?>
			<?= $location->image(); ?>
		<? endif; ?>
	</div>
	<div class="content">
		<a href="<?= $location->map ?>" target="_blank"><?= $location->fullAddress() ?></a> 
		<a href="<?= $location->map ?>" target="_blank">Map</a><br/>
		<?= ($location->phone)? $location->phone.'<br>' : '' ?>
		
		<? if ($location->website): ?>
			<a href="<?= $location->website ?>" target="_blank">
				<?= $location->website ?></a><br/>
		<? endif; ?>

		<? if ($location->reviews): ?>
			<a href="<?= $location->reviews ?>" target="_blank">
				<?= $location->reviews ?></a><br/>
		<? endif; ?>
	</div>
</div>