<? defined('KOOWA') or die('Nooku not installed'); ?>
<? @helper('behavior.mootools') ?>
<style src="media://lib_koowa/css/koowa.css" />
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://com_wut/css/admin.css" />

<form action="<?= @route() ?>" method="get" class="-koowa-grid">
	<table class="adminlist">
		<thead>
			<tr>
				<th width="10"><?= @helper('grid.checkall') ?></th>
				<th width="50">&nbsp;</th>
				<th><?= @helper('grid.sort', array('column'=>'title')) ?></th>
				<th width="75"><?= @helper('grid.sort', array('column'=>'address')) ?></th>
				<th width="75"><?= @helper('grid.sort', array('column'=>'city')) ?></th>
				<th width="75"><?= @helper('grid.sort', array('column'=>'province')) ?></th>
				<th width="75"><?= @helper('grid.sort', array('column'=>'postal')) ?></th>
				<th width="75"><?= @helper('grid.sort', array('column'=>'phone')) ?></th>
				<th width="75"><?= @helper('grid.sort', array('column'=>'website')) ?></th>
				<th width="75"><?= @helper('grid.sort', array('column'=>'review')) ?></th>
				<th width="75"><?= @helper('grid.sort', array('column'=>'map')) ?></th>
				<th width="75"><?= @helper('grid.sort', array('column'=>'enabled')) ?></th>
				<th width="15"><?= @helper('grid.sort', array('column'=>'wut_location_id'))?></th>
			</tr>
		</thead>
		
		<tfoot>
			<tr>
				<td colspan="99">
					<?= @helper('paginator.pagination', array('total'=>$total))?>
				</td>
			</tr>
		</tfoot>
		
		<tbody>
			<? $i = 1;
			foreach ($ups as $up): ?>
			<tr>
				<td align="center"><?= @helper('grid.check', array('row'=>$up)) ?></td>
				<td align="center">&nbsp;</td>
				<td><?= @helper('grid.sort', array('column'=>'title')) ?></td>
				<td align="center"><?= @helper('grid.sort', array('column'=>'address')) ?></td>
				<td align="center"><?= @helper('grid.sort', array('column'=>'city')) ?></td>
				<td align="center"><?= @helper('grid.sort', array('column'=>'province')) ?></td>
				<td align="center"><?= @helper('grid.sort', array('column'=>'postal')) ?></td>
				<td align="center"><?= @helper('grid.sort', array('column'=>'phone')) ?></td>
				<td align="center"><?= @helper('grid.sort', array('column'=>'website')) ?></td>
				<td align="center"><?= @helper('grid.sort', array('column'=>'review')) ?></td>
				<td align="center"><?= @helper('grid.sort', array('column'=>'map')) ?></td>
				<td align="center"><?= @helper('grid.sort', array('column'=>'enabled')) ?></td>
				<td align="center"><?= @helper('grid.sort', array('column'=>'wut_location_id'))?></td>
			</tr>
			<? $i++;
			endforeach; ?>
			
			<? if (!count($ups)): ?>
			<tr>
				<td align="center" colspan="99">
					<?= @text('No Ups Available') ?>
				</td>
			</tr>
			<? endif; ?>
		</tbody>
	</table>
</form>