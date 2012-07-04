<?php

class ModWutcategoriesHtml extends ModDefaultHtml
{
	
	public function display()
	{
	 	$controller = KService::get('com://site/wut.controller.category')
	 		->view('categories')
	 		->layout('widget');

	 	return $controller->display();	
	}
	
}