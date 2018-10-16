<?php
/**
 * Created by PhpStorm.
 * User: tank
 * Date: 2018/6/8
 * Time: 22:13
 */

use engine\EngineZero;

require_once dirname(dirname(__DIR__)).'/vendor/autoload.php';

$engine = EngineZero::instance();

$engine->registerAlias([
    '@root' => dirname(dirname(__DIR__)),
    '@app'  => dirname(dirname(__DIR__)).'/app',
    '@view' => dirname(dirname(__DIR__)).'/app/views',
    '@route' => dirname(__DIR__).'/route',
    '@admin' => dirname(dirname(__DIR__)).'/admin',
]);

$engine->set('app', [
    'class' => '\engine\application\web\Application'
]);