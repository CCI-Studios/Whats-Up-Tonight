<?php

class ModWutupHtml extends ModDefaultHtml
{
	
	public function display()
	{
	 	$controller = KService::get('com://site/wut.controller.ups')
	 		->view('ups')
	 		->layout('widget');

	 	JFactory::getDocument()->addScript('/media/com_wut/js/mod_wutups.js');

	 	return $controller->display();
	}
	
}