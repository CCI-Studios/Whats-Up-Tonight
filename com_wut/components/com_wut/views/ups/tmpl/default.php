<style src="media://com_wut/css/com_wut_site.css" />

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
				adsfasdffsda
			</div>

			<div class="details"><a class="button" href="<?= @route("view=up&{$itemid}&id={$up->id}") ?>">
				Details
				<img src="/images/arrowDown.png" width="10" height="8" alt="arrowDown">
			</a></div>
		</div>
	</div></div>
<? endforeach; ?>
</div>

<div class="pagination">
	<?= @helper('paginator.pagination', array(
		'total'			=> $total,
		'show_limit'	=> false,
		'show_count'	=> false,
	)) ?>
</div>