<?php

class ComWutDispatcher extends ComDefaultDispatcher
{

	public function _initialize(KConfig $config)
	{
		$config->append(array(
			'controller' => 'ups'
		));

		parent::_initialize($config);
	}

}