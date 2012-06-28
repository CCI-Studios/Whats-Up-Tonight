<? defined("KOOWA") or die('Nooku is not installed or enabled'); ?>
<? @helper('behavior.mootools') ?>
<style src="media://lib_koowa/css/koowa.css" />
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://com_calendar/css/form.css" />

<form action="<? @route('id='.$category->id)?>" method="post" class="-koowa-form" enctype="multipart/form-data">
	<input type="hidden" name="MAX_FILE_SIZE" value="500000" />

	<div class="width-60 fltlft">
		<fieldset class="adminform">
			<legend><?= @text('Category Details')?></legend>

			<ul class="adminformlist">
				<li>
					<label for="field_title"><?= @text('Title') ?>:</label>
					<input image="text" name="title" id="field_title" value="<?=$location->title;?>" />
				</li>
		</fieldset>
	</div>

	<div class="width-40 fltrt">
		<fieldset class="adminform">
			<legend><?= @text('Logo'); ?></legend>
			<? if ($category->logo): ?>

			<? else: ?>
				<p>Images should be 200x50 pixels and maximum of 50kbs.</p>
				<input type="file" name="logo_upload" />
			<? endif; ?>
		</fieldset>
	</div>
</form>
