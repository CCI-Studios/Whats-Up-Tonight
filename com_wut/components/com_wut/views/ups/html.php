<?php

class ComWutViewUpsHtml extends ComDefaultViewHtml
{

	public function display()
	{
		$this->assign('height', '140px');
		$this->_pageTitle();

		$this->assign('itemid', $this->_getItemID());

		return parent::display();
	}

	protected function _pageTitle()
	{
		$app    	= JFactory::getApplication();
		$doc    	= JFactory::getDocument();
		$menus  	= $app->getMenu();
		$pathway	= $app->getPathway();
		$title  	= null;
		$params 	= &JComponentHelper::getParams('com_wut');

		$title = "UPs";

		// Check for empty title and add site name if param is set
		if (empty($title)) {
			$title = $app->getCfg('sitename');
		} elseif ($app->getCfg('sitename_pagetitles', 0) == 1) {
			$title = JText::sprintf('JPAGETITLE', $app->getCfg('sitename'), $title);
		} elseif ($app->getCfg('sitename_pagetitles', 0) == 2) {
			$title = JText::sprintf('JPAGETITLE', $title, $app->getCfg('sitename'));
		}
		if (empty($title)) {
			$title = JText::_('UPs');
		}

		$doc->setTitle($title);
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