<? @helper('behavior.mootools') ?>
<script src="media://lib_koowa/js/koowa.js" />

<form action="<?= @route() ?>" method="get" class="-koowa-grid">

	<? if (count($locations)): ?>
		<? foreach($locations as $location): ?>
			<h2><?= $location->title ?></h2>
			<?= @template('com://site/wut.view.location.simple', array('location'=>$location)) ?>
			<div class="right"><a href="<?= @route("view=location&id={$location->id}") ?>">More Details</a></div>
		<? endforeach; ?>
	<? else: ?>
		<p>No locations</p>
	<? endif; ?>
	<div class="clear" style="margin: 1em 0 0;"></div>

	<div class="pagination">
		<?= @helper('paginator.pagination', array(
			'total'			=> $total,
			'show_limit'	=> false,
			'show_count'	=> false,
		)) ?>
	</div>
</form>