<?php
defined('KOOWA') or die;

echo KService::get('mod://site/wutdates.html')
	->module($module)
	->display();