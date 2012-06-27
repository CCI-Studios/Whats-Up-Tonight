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
				<th width="150">Logo</th>
				<th><?= @helper('grid.sort', array('column'=>'title')) ?></th>
				<th width="175">Address</th>
				<th width="125"><?= @helper('grid.sort', array('column'=>'website')) ?></th>
				<th width="125"><?= @helper('grid.sort', array('column'=>'map')) ?></th>
				<th width="50"><?= @helper('grid.sort', array('column'=>'enabled')) ?></th>
				<th width="15"><?= @helper('grid.sort', array('column'=>'wut_location_id', 'title'=>'ID'))?></th>
			</tr>
		</thead>
		
		<tfoot>
			<tr>
				<td colspan="8">
					<?= @helper('paginator.pagination', array('total'=>$total))?>
				</td>
			</tr>
		</tfoot>
		
		<tbody>
			<? $i = 1;
			foreach ($locations as $location): ?>
			<tr>
				<td align="center"><?= @helper('grid.checkbox', array('row'=>$location)) ?></td>
				<td align="center"><a href="<?=@route("location={$location->id}")?>">
					logo
				</a></td>
				<td><a href="<?=@route("view=location&id={$location->id}")?>">
					<?= @escape($location->title) ?>
				</a></td>
				<td align="center"><?= $location->fullAddress() ?></td>
				<td align="center"><a href="<?= $location->website ?>" target="_blank">
					<?= $location->website ?>
				</a></td>
				<td align="center"><a href="<?= $location->map ?>" target="_blank">
					Google Maps
				</a></td>
				<td align="center"><?= @helper('grid.enable', array('row'=>$location)) ?></td>
				<td align="center"><?= @escape($location->id) ?></td>
			</tr>
			<? $i++;
			endforeach; ?>
			
			<? if (!count($locations)): ?>
			<tr>
				<td align="center" colspan="8">
					<?= @text('No Locations Available') ?>
				</td>
			</tr>
			<? endif; ?>
		</tbody>
	</table>
</form>