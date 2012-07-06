<? defined("KOOWA") or die('Nooku is not installed or enabled'); ?>
<? @helper('behavior.mootools') ?>
<style src="media://lib_koowa/css/koowa.css" />
<script src="media://lib_koowa/js/koowa.js" />
<style src="media://com_calendar/css/form.css" />

<form action="<? @route('id='.$up->id)?>" method="post" class="-koowa-form">

	<div class="width-60 fltlft">
		<fieldset class="adminform">
			<legend><?= @text('UP Details')?></legend>

			<ul class="adminformlist">
				<li>
					<label for="field_title"><?= @text('Title') ?>:</label>
					<input image="text" name="title" id="field_title" value="<?=$up->title;?>" />
				</li>

				<li>
					<label for="field_location"><?= @text('Location') ?>:</label>
					<?= @helper('listbox.locations', array(
						'selected'	=> $up->wut_location_id,
						'attribs'	=> array('class' => 'required')
					)) ?>
				</li>

				<li>
					<label for="field_date"><?= @text('Date') ?>:</label>
					<?= JHtml::_('calendar', $up->date, 'date', 'field_date', '%Y-%m-%d') ?>
				</li>
			</ul>
		</fieldset>

		<fieldset class="adminform">
			<legend><?= @text('Details') ?></legend>

			<ul class="adminformlist">
				<li>
					<label for="field_subtitle"><?= @text('Subtitle') ?>:</label>
					<input image="text" name="subtitle" id="field_subtitle" value="<?=$up->subtitle;?>" />
				</li>

				<li>
					<label for="field_intro"><?= @text('Intro') ?>:</label>
					<input image="text" name="intro" id="field_intro" value="<?=$up->intro;?>" />
				</li>

				<li>
					<label for="field_short"><?= @text('Short') ?>:</label>
					<input image="text" name="short" id="field_short" value="<?=$up->short;?>" />
				</li>
			</ul>
		</fieldset>

		<fieldset class="adminform">
			<legend><?= @text('Description') ?></legend>
			<?= @editor(array(
				'width'=>'100%',
			)) ?>
		</fieldset>
	</div>

	<div class="width-40 fltrt">
		<fieldset class="adminform">
			<legend><?= @text('Categories') ?></legend>

			<ul class="adminformlist">
				<li>
					<label for="field_eats"><?= @text('Eats') ?>:</label>
					<input type="hidden" name="eats" value="0" />
					<input type="checkbox" 
						name="eats" 
						id="field_eats" 
						value="1" 
						<?= ($up->eats)? 'checked="checked"': ''?> />
				</li>

				<li>
					<label for="field_drinks"><?= @text('Drinks') ?>:</label>
					<input type="hidden" name="drinks" value="0" />
					<input type="checkbox" 
						name="drinks" 
						id="field_drinks" 
						value="1" 
						<?= ($up->drinks)? 'checked="checked"': ''?> />
				</li>

				<li>
					<label for="field_entertainment"><?= @text('Entertainment') ?>:</label>
					<input type="hidden" name="entertainment" value="0" />
					<input type="checkbox" 
						name="entertainment" 
						id="field_entertainment" 
						value="1" 
						<?= ($up->entertainment)? 'checked="checked"': ''?> />
				</li>

				<li>
					<label for="field_events"><?= @text('Events') ?>:</label>
					<input type="hidden" name="events" value="0" />
					<input type="checkbox" 
						name="events" 
						id="field_events" 
						value="1" 
						<?= ($up->events)? 'checked="checked"': ''?> />
				</li>

				<li>
					<label for="field_otbs"><?= @text('OTBS') ?>:</label>
					<input type="hidden" name="otbs" value="0" />
					<input type="checkbox" 
						name="otbs" 
						id="field_otbs" 
						value="1" 
						<?= ($up->otbs)? 'checked="checked"': ''?> />
				</li>
			</ul>
		</fieldset>
	</div>
</form>
