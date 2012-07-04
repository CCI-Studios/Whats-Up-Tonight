<?php

class ComWutViewDatesHtml extends ComDefaultViewHtml
{

	public function display()
	{
		$current = KRequest::get('get.date','date', date('Y-m-d'));

		$days = array(
			array(
				'date'		=> strtotime(date('Y-m-d', strtotime($current .' -3 days'))),
				'classes'	=> 'first',
				'count'		=> '12',
			),
			array(
				'date' => strtotime(date('Y-m-d', strtotime($current .' -2 days'))),
				'classes'	=> '',
				'count'		=> '1',
			),
			array(
				'date' => strtotime(date('Y-m-d', strtotime($current .' -1 days'))),
				'classes'	=> '',
				'count'		=> '12',
			),
			array(
				'date' => strtotime(date('Y-m-d', strtotime($current))),
				'classes'	=> 'featured',
				'count'		=> '3',
			),
			array(
				'date' => strtotime(date('Y-m-d', strtotime($current .' +1 days'))),
				'classes'	=> '',
				'count'		=> '12',
			),
			array(
				'date' => strtotime(date('Y-m-d', strtotime($current .' +2 days'))),
				'classes'	=> '',
				'count'		=> '16',
			),
			array(
				'date' => strtotime(date('Y-m-d', strtotime($current .' +3 days'))),
				'classes'	=> 'last',
				'count'		=> '4',
			),

		);

		$this->assign('days', $days);
		$this->assign('itemid', $this->_getItemID());
		$this->assign('prev', date('Y-m-d', strtotime($current .' -7 days')));
		$this->assign('next', date('Y-m-d', strtotime($current .' +7 days')));

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