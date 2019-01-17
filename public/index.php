<?php

include_once dirname(__DIR__) . '/config/app/bootstrap.php';

$configFilePath = dirname(__DIR__) . '/config/app/app.yaml';

$config = \Symfony\Component\Yaml\Yaml::parseFile($configFilePath);

$engine = \engine\EngineZero::instance();

$application = $engine->get('app', [$config]);

$application->run();