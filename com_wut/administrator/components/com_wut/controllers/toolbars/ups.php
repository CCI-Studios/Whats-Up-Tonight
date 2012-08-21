<?php

class ComWutControllerToolbarUps extends ComDefaultControllerToolbarDefault
{

	public function getCommands()
	{
		$this
			->addSeparator()
			->addCommand('copy');

		return parent::getCommands();
	}

	protected function _commandCopy(KControllerToolbarCommand $command)
	{
		$command->append(array(
			'attribs'	=> array(
				'data-action'	=> 'copy',
			)
		));
	}

}