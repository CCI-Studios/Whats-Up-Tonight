<style src="media://com_wut/css/com_wut_site.css" />
<? @helper('behavior.mootools') ?>
<script src="media://lib_koowa/js/koowa.js" />
<script src="media://com_wut/js/com_wut_site.js" />

<div id="com_wut-ups">
	<?= @template('split'); ?>

	<div class="pagination">
		<?= @helper('paginator.pagination', array(
			'total'			=> $total,
			'show_limit'	=> false,
			'show_count'	=> false,
		)) ?>
	</div>
</div>
