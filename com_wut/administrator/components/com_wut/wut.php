<?php
defined('KOOWA') or die('Koowa is not available or is not enabled.');

echo KService::get('com://admin/wut.dispatcher')->dispatch();