<?php

include_once dirname(__DIR__).'/config/bootstrap.php';

$config = require_once dirname(__DIR__).'/config/web/app.php';

$engine = \engine\EngineZero::instance();

$application = $engine->get('app', $config);

$application->run();
