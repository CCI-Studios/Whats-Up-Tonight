<style src="media://com_wut/css/com_wut_site.css" />
<? @helper('behavior.mootools') ?>
<script src="media://lib_koowa/js/koowa.js" />
<script src="media://com_wut/js/com_wut_site.js" />

<div id="ups-overlay">
	<div class="row com_wut-ups">
	<? foreach($ups as $up): ?>
		<div class="span4"><div>
			<div style="height: <?= $height ?>">
				<h3><?= $up->title ?></h3>
				
				<div class="description1">
					<div class="logo">
						<img src="/images/logos/logo_scroggies.png" width="127" height="98" alt="logo scroggies">
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
	<? endforeach; ?>

	<? if (!count($ups)): ?>
		<h1>No UPs available</h1>
		<p>There are no UPs available on this date.</p>
	<? endif; ?>

	</div>
</div>

<div class="pagination">
	<?= @helper('paginator.pagination', array(
		'total'			=> $total,
		'show_limit'	=> false,
		'show_count'	=> false,
	)) ?>
</div>