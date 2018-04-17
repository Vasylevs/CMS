<?php

require_once dirname(__DIR__).'/conf/init.php';
require_once LIBS.'/functions.php';

new \core\App();

debug( \core\App::$app->getProperties());