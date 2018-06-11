<?php

include_once dirname(dirname(__DIR__)) . '/config/admin/bootstrap.php';

$config = require_once dirname(dirname(__DIR__)) . '/config/admin/app.php';

$engine = \engine\EngineZero::instance();

$application = $engine->get('app', [$config]);

$application->run();
