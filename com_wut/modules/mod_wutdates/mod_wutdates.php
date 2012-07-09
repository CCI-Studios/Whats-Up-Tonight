<?php
defined('KOOWA') or die;

KLoader::loadIdentifier('com://site/wut.alias');
echo KService::get('mod://site/wutdates.html')
	->module($module)
	->display();