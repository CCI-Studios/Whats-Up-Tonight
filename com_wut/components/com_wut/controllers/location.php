<?php

class ComWutControllerLocation extends ComDefaultControllerDefault
{

	public function getRequest()
	{
		$this->_request->limit = 9;

		return parent::getRequest();
	}

}