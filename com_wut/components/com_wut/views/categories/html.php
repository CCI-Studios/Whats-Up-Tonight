<?php

class ComWutViewCategoriesHtml extends ComDefaultViewHtml
{

	public function display()
	{
		$date = KRequest::get('get.date', 'date', date('Y-m-d'));
		$current = KRequest::get('get.category', 'cmd', '');

		$this->assign('date', "&date={$date}");
		$this->assign('current', $current);
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