<? @helper('behavior.mootools') ?>
<script src="media://lib_koowa/js/koowa.js" />

<form action="<?= @route() ?>" method="get" class="-koowa-grid">
	<ul>
		<? foreach ($locations as $location): ?>
			<li><a href="<?= @route("view=location&id={$location->id}")?>">
				<?= $location->title ?>
			</a></li>
		<? endforeach; ?>

		<? if (!count($locations)) :?>
			<li>No Locations</li>
		<? endif; ?>
	</ul>

	<div class="pagination">
		<?= @helper('paginator.pagination', array(
			'total'			=> $total,
			'show_limit'	=> false,
			'show_count'	=> false,
		)) ?>
	</div>
</form>