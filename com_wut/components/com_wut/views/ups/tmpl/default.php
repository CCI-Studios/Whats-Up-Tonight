<style src="media://com_wut/css/com_wut_site.css" />

<div class="row com_wut-ups">
<? foreach($ups as $up): ?>
	<div class="module span4 grid"><div><div>
		<div style="height: <?= $height ?>" class="custom">
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

			<div><button>
				Details
				<img src="/images/arrowDown.png" width="10" height="8" alt="arrowDown">
			</button></div>
		</div>
	</div></div></div>
<? endforeach; ?>
</div>

<div class="pagination">
	<?= @helper('paginator.pagination', array(
		'total'			=> $total,
		'show_limit'	=> false,
		'show_count'	=> false,
	)) ?>
</div>