<?php

include_once dirname(__DIR__).'/config/bootstrap.php';

$config = require_once dirname(__DIR__).'/config/web/app.php';

$engine = \engine\EngineZero::instance();
$engine->loadConfigure($config);

$application = $engine->generateObject('app');

$application->run();

