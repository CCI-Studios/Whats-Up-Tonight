<?php

class ComWutControllerUp extends ComDefaultControllerDefault
{

	protected function _actionCopy(KCommandContext $context) 
	{
		$rowset = $this->execute('browse', $context);
		$this->setRequest(array());

		// for each row create a new copy 
		foreach ($rowset as $row) 
		{ 
			// get data and do some manipulation 
			$data = $row->getData(); 
			$data['id']         = 0; 
			$data['ordering']   = -1; 
			$data['enabled']    = 1; 
			// $data['title']       = JText::sprintf('Copy of %s', $data['title']);

			$context->data = $data;
			$this->getModel()->reset();

			// add new row 
			$row = $this->execute('add', $context);
        }

        $app = JFactory::getApplication();
        $this->setRedirect('index.php?option=com_wut&view=ups&id=');
    } 


}