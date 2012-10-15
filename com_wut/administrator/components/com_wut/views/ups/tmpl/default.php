<? defined('KOOWA') or die('Nooku not installed'); ?>
<? @helper('behavior.mootools') ?>
<style src="media://lib_koowa/css/koowa.css" />
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://com_wut/css/admin.css" />

<form action="<?= @route() ?>" method="get" class="-koowa-grid">
	<table class="adminlist">
		<thead>
			<tr>
				<td colspan="6" align="right">
					<?= @helper('listbox.locations', array(
						'prompt' => ' - All Locations - ',
						'checked'	=> KRequest::get('get.wut_location_id', 'int')
					)) ?>
				</td>
			</tr>

			<tr>
				<th width="10"><?= @helper('grid.checkall') ?></th>
				<th><?= @helper('grid.sort', array('column'=>'title')) ?></th>
				<th width="150"><?= @helper('grid.sort', array('column'=>'wut_location_id', 'title'=>'Location')) ?></th>
				<th width="75"><?= @helper('grid.sort', array('column'=>'date')) ?></th>
				<th width="50"><?= @helper('grid.sort', array('column'=>'enabled')) ?></th>
				<th width="15"><?= @helper('grid.sort', array('column'=>'wut_up_id', 'title'=>'ID'))?></th>
			</tr>
		</thead>

		<tfoot>
			<tr>
				<td colspan="6">
					<?= @helper('paginator.pagination', array('total'=>$total))?>
				</td>
			</tr>
		</tfoot>

		<tbody>
			<? $i = 1;
			foreach ($ups as $up): ?>
			<tr>
				<td align="center"><?= @helper('grid.checkbox', array('row'=>$up)) ?></td>
				<td><a href="<?= @route("view=up&id={$up->id}") ?>">
					<?= $up->title .' - '. $up->location->title;?>
				</a></td>
				<td align="center"><?= $up->location->title ?></td>
				<td align="center"><?= $up->date ?></td>
				<td align="center"><?= @helper('grid.enable', array('row'=>$up)) ?></td>
				<td align="center"><?= $up->id ?></td>
			</tr>
			<? $i++;
			endforeach; ?>

			<? if (!count($ups)): ?>
			<tr>
				<td align="center" colspan="6">
					<?= @text('No Ups Available') ?>
				</td>
			</tr>
			<? endif; ?>
		</tbody>
	</table>
</form>