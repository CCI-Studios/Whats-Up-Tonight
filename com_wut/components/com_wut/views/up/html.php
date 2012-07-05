<?php

class ComWutViewUpHtml extends ComDefaultViewHtml
{

	public function display()
	{
		$this->assign('upid', $this->_getItemID('index.php?option=com_wut&view=up'));
		$this->assign('upsid', $this->_getItemID('index.php?option=com_wut&view=ups'));
		return parent::display();
	}

	protected function _getItemID($link)
	{
		$menu = JSite::getMenu('site');
		$item = $menu->getItems(
				'link', 
				$link, 
				true);

		if ($item) {
			return 'Itemid='. $item->id;
		} else {
			return '';
		}
	}

}