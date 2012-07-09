<?php

class ComWutViewUpsJson extends KViewJson
{

	public function display()
	{
		$result = new stdClass();
		$results->ups = $this->_getList();
		$results->date = KRequest::get('get.date', 'date', date('Y-m-d'));
		$results->category = KRequest::get('get.category', 'cmd', '');
		$results->pagination = array(
			'first' => '/first.html',
			'prev'	=> '/prev.html',
			'next'	=> '/next.html',
			'last'	=> '/last.html',
			'pages'	=> array(
				array(2 => '/2.html'),
				array(3 => '/3.html'),
				array(4 => '/4.html'),
				array(5 => '/5.html'),
				array(6 => '/6.html'),
				array(7 => '/7.html'),
				array(8 => '/8.html'),
			)
		);
		$results->dates = array();
		for ($i = 0; $i < 7; $i++) {
			$date = strtotime(date('Y-m-d', strtotime($results->date .' '. ($i-3) .' days')));
			$results->dates[] = array(
				'date'	=> $date,
				'href'	=> "index.php?view=ups&date={$date}'",
				'dayName' => date('l', $date),
				'day'	=> date('d', $date),
				'count' => ($i-3),
			);
		}

		return json_encode($results);
	}
}