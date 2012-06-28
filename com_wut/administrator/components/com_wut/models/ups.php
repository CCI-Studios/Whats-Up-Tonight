<?php

class ComWutModelUps extends ComDefaultModelDefault
{

	public function __construct(KConfig $config)
	{
		parent::__construct($config);

		$this->_state
			->remove('sort')->insert('sort', 'cmd', 'date')
			->insert('enabled', 'int')
			->insert('past', 'boolean', true)
			->insert('date', 'date');
	}

	protected function _buildQueryWhere(KDatabaseQuery $query)
	{
		$state = $this->_state;

		if (isset($state->past) && $state->past == 1) {
			$query->where('tbl.date', '>=', date('Y-m-d'));
		}

		if (is_numeric($state->enabled)) {
			$query->where('tbl.enabled', '=', $state->enabled);
		}

		if (isset($state->date)) {
			$query->where('tbl.date', '=', $state->date);
		}

		parent::_buildQueryWhere($query);
	}

}