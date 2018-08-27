<?php

include_once dirname(dirname(__DIR__)) . '/config/admin/bootstrap.php';

$configFilePath = dirname(dirname(__DIR__)) . '/config/admin/app.yaml';
$config = \Symfony\Component\Yaml\Yaml::parseFile($configFilePath);

$engine = \engine\EngineZero::instance();

$application = $engine->get('app', [$config]);

$application->run();
