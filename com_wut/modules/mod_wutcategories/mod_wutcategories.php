<?php
defined('KOOWA') or die;

echo KService::get('mod://site/wutcategories.html')
	->module($module)
	->display();