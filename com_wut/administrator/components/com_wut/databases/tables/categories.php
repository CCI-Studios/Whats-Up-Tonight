<?php
defined('KOOWA') or die;

class ComWutDatabaseTableCategories extends KDatabaseTableDefault {
	
	protected function _initialize(KConfig $config) {
		$uploadable = $this->getService('com://admin/cci.database.behavior.uploadable', array(
			'location'	=> 'media/com_wut/uploads/icons/',
			'fieldname'	=> 'logo',
		));
		$config->behaviors = array($uploadable);
		parent::_initialize($config);
	}
}