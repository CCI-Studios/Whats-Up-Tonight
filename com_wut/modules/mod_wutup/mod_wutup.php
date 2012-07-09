<?php
defined('KOOWA') or die;

KLoader::loadIdentifier('com://site/wut.alias');
echo KService::get('mod://site/wutup.html')
	->module($module)
	->display();