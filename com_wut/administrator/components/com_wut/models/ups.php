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

		if (isset($state->category) && $state->category != "") {
			$query->where("tbl.{$state->category}", '=', '1');
		}

		if (is_numeric($state->wut_location_id)) {
			$query->where('tbl.wut_location_id', '=', $state->wut_location_id);
		}

		// this MUST be last in where
		if (isset($state->date) && $state->date != "") {
			$dayName = strtolower(date('l', strtotime($state->date)));

			// specific date search
			$query->where('tbl.date', '=', $state->date);

			// date range search
			$query->where('tbl.start_date', '<=', $state->date, 'OR');
			$query->where('tbl.end_date', '>=', $state->date);
			$query->where('tbl.'.$dayName, '=', 1);
			$query->where('tbl.enabled', '>=', $state->enabled); // dirty hack
			if (isset($state->category) && $state->category != "") {
				$query->where("tbl.{$state->category}", '>=', '1');
			}
			//$query->where = array_merge($query->where, $where);
		}

		parent::_buildQueryWhere($query);
	}
}