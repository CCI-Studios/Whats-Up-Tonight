<?php

class ModWutdatesHtml extends ModDefaultHtml
{
	
	public function display()
	{
	 	$controller = KService::get('com://site/wut.controller.date')
	 		->view('dates')
	 		->layout('default');

	 	return $controller->display();
	}
	
}