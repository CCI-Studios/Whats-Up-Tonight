<?php

class ComWutDatabaseRowUp extends ComCciDatabaseRowRelated
{

	public function __construct(KConfig $config)
	{
		parent::__construct($config);

		$this->belongs_to('location');
	}

	public function isReoccuring() {
		return ($this->start_date != '0000-00-00' || $this->end_date != '0000-00-00');
	}
}