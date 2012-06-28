<?php

class ModWutcategoriesHtml extends ModDefaultHtml
{
	
	public function display()
	{
		$model = $this->getService('com://admin/wut.model.categories');
		$categories = $model->getList();
		$this->assign('categories', $categories);

	 	return parent::display();	
	}
	
}