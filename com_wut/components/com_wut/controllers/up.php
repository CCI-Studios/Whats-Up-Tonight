<?php

class ComWutControllerUp extends ComDefaultControllerDefault
{

	public function getRequest()
	{

		$this->_request->enabled = 1;
		$this->_request->limit = 9;
		$this->_request->date = KRequest::get('get.date', 'date', date('Y-m-d'));

		return parent::getRequest();
	}

}