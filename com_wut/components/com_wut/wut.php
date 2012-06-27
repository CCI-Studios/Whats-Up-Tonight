<?php
defined('KOOWA') or die;

KLoader::loadIdentifier('com://site/wut.aliases');
echo KService::get('com://site/wut.dispatcher')->dispatch();
