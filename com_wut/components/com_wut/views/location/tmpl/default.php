<? @helper('behavior.mootools') ?>
<script src="media://lib_koowa/js/koowa.js" />

<div>
	<h1><?= $location->title ?></h1>

	<?= @template('simple') ?>

	<h2>Ups</h2>
	<ul>
		<? foreach($location->ups as $up): ?>
			<li><a href="<?= @route("view=up&id={$up->id}") ?>">
				<?= $up->title .' - '. $up->date ?>
			</a></li>
		<? endforeach; ?>
	</ul>
	<? if (!count($location->ups)): ?>
		<p>No UPs for this location</p>
	<? endif; ?>

	<p>Return to <a href="<?= @route('view=locations') ?>">Locations</a>.</p>
</div>