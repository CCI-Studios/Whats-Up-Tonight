<?php

class ComWutModelUps extends ComDefaultModelDefault
{

	public function __construct(KConfig $config)
	{
		parent::__construct($config);

		$this->_state
			->remove('sort')->insert('sort', 'cmd', 'date')
			->insert('enabled', 'int')
			->insert('category', 'cmd')
			->insert('wut_location_id', 'int')
			->insert('random', 'boolean')
			->insert('date', 'date');
	}

	protected function _buildQueryOrder(KDatabaseQuery $query) {
		if (isset($this->_state->random) && $this->_state->random) {
			$query->order('RAND()');
		} else {
			parent::_buildQueryOrder($query);
		}
	}

	protected function _buildQueryWhere(KDatabaseQuery $query)
	{
		$state = $this->_state;

		if (is_numeric($state->enabled)) {
			$query->where('tbl.enabled', '=', $state->enabled);
		}

		if (isset($state->date) && $state->date != "") {
			$query->where('tbl.date', '=', $state->date);
		}

		if (isset($state->category) && $state->category != "") {
			$query->where("tbl.{$state->category}", '=', '1');
		}

		if (is_numeric($state->wut_location_id)) {
			$query->where('tbl.wut_location_id', '=', $state->wut_location_id);
		}

		parent::_buildQueryWhere($query);
	}

}