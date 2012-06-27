<?php

class ComWutDatabaseRowLocation extends KDatabaseRowDefault
{

	public function fullAddress()
	{
		$parts = array_filter(array($this->address, $this->city, $this->province, $this->postal));
		return implode(', ', $parts);
	}

	/**
	 * Overiding save to autofill the map address if no address is present
	 **/
	public function save()
	{
		if ($this->website && substr($this->website, 0, 4) !== 'http') {
			$this->website = 'http://'. $this->website;
		}

		if ($this->reviews && substr($this->reviews, 0, 4) !== 'http') {
			$this->reviews = 'http://'. $this->reviews;
		}

		if (!$this->map) {
			$this->map = 'https://maps.google.com/maps?hl=en&t=v&z=16&q='. urlencode($this->fulladdress());
		}

		return parent::save();
	}

}