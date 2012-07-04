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
				<th width="100">&nbsp;</th>
				<th><?= @helper('grid.sort', array('column'=>'title')) ?></th>
				<th width="50"><?= @helper('grid.sort', array('column'=>'enabled')) ?></th>
				<th width="15"><?= @helper('grid.sort', array('column'=>'wut_up_id', 'title'=>'ID'))?></th>
			</tr>
		</thead>
		
		<tfoot>
			<tr>
				<td colspan="5">
					<?= @helper('paginator.pagination', array('total'=>$total))?>
				</td>
			</tr>
		</tfoot>
		
		<tbody>
			<? $i = 1;
			foreach ($categories as $category): ?>
			<tr>
				<td align="center"><?= @helper('grid.checkbox', array('row'=>$category)) ?></td>
				<td align="center">
					<? if ($category->icon): ?>
						<img src="/media/com_wut/uploads/icons/<?= $category->icon ?>" />
					<? endif; ?>
				</td>
				<td><a href="<?= @route("view=category&id={$category->id}") ?>">
					<?= $category->title ?>
				</a></td>
				<td align="center"><?= @helper('grid.enable', array('row'=>$category)) ?></td>
				<td align="center"><?= $category->id ?></td>
			</tr>
			<? $i++;
			endforeach; ?>
			
			<? if (!count($categories)): ?>
			<tr>
				<td align="center" colspan="6">
					<?= @text('No Categories Available') ?>
				</td>
			</tr>
			<? endif; ?>
		</tbody>
	</table>
</form>