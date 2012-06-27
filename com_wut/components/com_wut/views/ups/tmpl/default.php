
<div class="row">
<? for($i=0; $i < 7; $i++): ?>
	<div class="module span4 grid">
		<div style="height: 140px; "><div><div>
			<div class="custom"><div>
				<h3>Wing Night</h3>
				
				<div class="logo"><img src="/images/logos/logo_scroggies.png" width="127" height="98" alt="logo scroggies"></div>

				<div class="title"><h4>Eats/Drinks</h4></div>

				<div class="description">Hello World</div>

				<div><button>Details<img src="/images/arrowDown.png" width="10" height="8" alt="arrowDown"></button></div>

			</div></div>
		</div></div></div>
	</div>
<? endfor; ?>
</div>

<div class="pagination">
	<?= @helper('paginator.pagination', array(
		'total'			=> $total,
		'show_limit'	=> false,
		'show_count'	=> false,
	)) ?>
</div>