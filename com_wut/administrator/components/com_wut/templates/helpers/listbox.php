<?php

class ComWutTemplateHelperListbox extends ComDefaultTemplateHelperListbox
{

	public function locations($config = array())
	{
		$config = new KConfig($config);
		$config->append(array(
			'model'		=> 'locations',
			'name' 		=> 'wut_location_id',
			'value'		=> 'id',
			'text'		=> 'title',
			'prompt'	=> '- Select Location -',
			'attribs'	=> array('id' => $config->name)
		));

		return parent::_listbox($config);
	}

}