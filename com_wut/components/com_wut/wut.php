<?php
defined('KOOWA') or die;

KLoader::loadIdentifier('com://site/wut.alias');
echo KService::get('com://site/wut.dispatcher')->dispatch();
