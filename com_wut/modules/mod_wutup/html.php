<?php

class ModWutupHtml extends ModDefaultHtml
{
	
	public function display()
	{
	 	$controller = KService::get('com://site/wut.controller.ups')
	 		->view('dates')
	 		->layout('widget');

	 	return $controller->display();
	}
	
}