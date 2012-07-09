<?php
defined('KOOWA') or die;

echo KService::get('mod://site/wutup.html')
	->module($module)
	->display();