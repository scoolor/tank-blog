<?php

use engine\Configure;
use engine\EngineZero;

require_once __DIR__.'/../vendor/autoload.php';

$config = [];

$configure = new Configure($config);

$engine = EngineZero::instance($configure);

$application = $engine->generateObject('app');

$application->run();

