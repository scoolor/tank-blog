<?php
/**
 * Created by PhpStorm.
 * User: tank
 * Date: 2018/5/31
 * Time: 23:26
 */

use engine\EngineZero;

require_once dirname(__DIR__).'/vendor/autoload.php';

$engine = EngineZero::instance();

$engine->registerAlias([
    '@root'=> dirname(__DIR__),
    '@app' => dirname(__DIR__).'/app'
]);

$engine->set('app', [
    'class' => '\engine\application\web\Application'
]);