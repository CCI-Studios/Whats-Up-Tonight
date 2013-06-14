<?php

class ComWutTemplateHelperChecks extends KTemplateHelperAbstract
{

	public function checkbox($config = array())
	{
		$config = new KConfig($config);
		$config->append(array(
			'text' => ucfirst($config->field),
			'id' => 'field_'. $config->field,
		));

		$field = $config->field;
		$text = $config->text;
		$id = $config->id;

		if ($config->{$field}) {
			$checked = 'checked="checked"';
		} else {
			$checked = '';
		}

		return <<<HTML
<label for="$id">$text</label>
<input type="hidden" value="0" name="$field" />
<input type="checkbox"
	name="$field"
	id="$id"
	value="1"
	$checked
	/>
HTML;
	}

}