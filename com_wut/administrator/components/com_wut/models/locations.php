<?php

class ComWutModelLocations extends ComDefaultModelDefault
{

	public function __construct(KConfig $config)
	{
		parent::__construct($config);

		$this->_state
			->remove('sort')->insert('sort', 'cmd', 'title')
			->remove('direction')->insert('direction', 'cmd', 'asc');
	}

}