<?php

class ComWutViewCategoriesHtml extends ComDefaultViewHtml
{

	public function display()
	{
		$this->assign('itemid', $this->_getItemID());

		return parent::display();
	}

	protected function _getItemID()
	{
		$menu = JSite::getMenu('site');
		$item = $menu->getItems(
				'link', 
				'index.php?option=com_wut&view=ups', 
				true);

		if ($item) {
			return 'Itemid='. $item->id;
		} else {
			return '';
		}
	}

}