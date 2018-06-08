<?php

include_once dirname(__DIR__) . '/config/app/bootstrap.php';

$config = require_once dirname(__DIR__) . '/config/app/app.php';

$engine = \engine\EngineZero::instance();

$application = $engine->get('app', [$config]);

$application->run();
