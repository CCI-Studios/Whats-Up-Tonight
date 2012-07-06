<?php
defined('KOOWA') or die;

class ComWutControllerToolbarMenubar extends ComDefaultControllerToolbarMenubar
{

	public function getCommands()
	{
		$name = $this->getController()->getIdentifier()->name;

		$this->addCommand('Ups', array(
			'href'		=> JRoute::_('index.php?option=com_wut&view=ups'),
			'active'	=> ($name === 'up')
		));

		$this->addCommand('Locations', array(
			'href'		=> JRoute::_('index.php?option=com_wut&view=locations'),
			'active'	=> ($name === 'location')
		));

		$this->addCommand('Categories', array(
			'href'		=> JRoute::_('index.php?option=com_wut&view=categories'),
			'active'	=> ($name === 'category')
		));

		return parent::getCommands();
	}

}