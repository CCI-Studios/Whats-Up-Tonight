<? defined("KOOWA") or die('Nooku is not installed or enabled'); ?>
<? @helper('behavior.mootools') ?>
<style src="media://lib_koowa/css/koowa.css" />
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://com_calendar/css/form.css" />

<form action="<? @route('id='.$location->id)?>" method="post" class="-koowa-form" enctype="multipart/form-data">
	<input type="hidden" name="MAX_FILE_SIZE" value="500000" />

	<div class="width-60 fltlft">
		<fieldset class="adminform">
			<legend><?= @text('Location Details')?></legend>

			<ul class="adminformlist">
				<li>
					<label for="field_title"><?= @text('Title') ?>:</label>
					<input image="text" name="title" id="field_title" value="<?=$location->title;?>" />
				</li>

				<li>
					<label for="field_address"><?= @text('Address') ?>:</label>
					<input type="text" name="address" id="field_address" value="<?=$location->address;?>" />
				</li>

				<li>
					<label for="field_city"><?= @text('City') ?>:</label>
					<input type="text" name="city" id="field_city" value="<?=$location->address?>" />
				</li>

				<li>
					<label for="field_province"><?= @text('Province') ?>:</label>
					<input type="text" name="province" id="field_province" value="<?=$location->province?>" />
				</li>

				<li>
					<label for="field_postal"><?= @text('Postal') ?>:</label>
					<input type="text" name="postal" id="field_postal" value="<?=$location->postal?>" />
				</li>

				<li>
					<label for="field_phone"><?= @text('Phone') ?>:</label>
					<input type="text" name="phone" id="field_phone" value="<?=$location->phone?>" />
				</li>

				<li>
					<label for="field_website"><?= @text('Website') ?>:</label>
					<input type="text" name="website" id="field_website" value="<?=$location->website?>" />
				</li>

				<li>
					<label for="field_reviews"><?= @text('Reviews') ?>:</label>
					<input type="text" name="reviews" id="field_reviews" value="<?=$location->reviews?>" />
				</li>

				<li>
					<label for="field_map"><?= @text('Map Link') ?>:</label>
					<input type="text" name="map" id="field_map" value="<?=$location->map?>" />
				</li>
		</fieldset>
	</div>

	<div class="width-40 fltrt">
		<fieldset class="adminform">
			<legend><?= @text('Logo'); ?></legend>
			<? if ($location->logo): ?>

			<? else: ?>
				<p>Images should be 200x50 pixels and maximum of 50kbs.</p>
				<input type="file" name="logo_upload" />
			<? endif; ?>
		</fieldset>
	</div>
</form>
