<?php

class ComWutViewDatesHtml extends ComDefaultViewHtml
{

	public function display()
	{
		$current = KRequest::get('get.date','date', date('Y-m-d'));
		$days = array();

		for ($i = -3; $i < 4; $i++) {
			$date = date('Y-m-d', strtotime($current ." $i days"));
			$model = $this->getService('com://site/wut.model.ups');
			$model->set('date', $date);
			$model->getList();

			$day = array(
				'date'	=> strtotime($date),
				'count'	=> $model->getTotal(),
			);
			$days[] = $day;
		}

		$this->assign('days', $days);
		$this->assign('itemid', $this->_getItemID());
		$this->assign('current', $current);
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