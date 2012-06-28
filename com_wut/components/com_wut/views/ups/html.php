<?php

class ComWutViewUpsHtml extends ComDefaultViewHtml
{

	public function display()
	{
		$this->assign('height', '140px');

		return parent::display();
	}

}