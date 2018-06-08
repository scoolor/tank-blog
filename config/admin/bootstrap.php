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
    '@admin'  => dirname(dirname(__DIR__)).'/admin',
    '@view' => dirname(dirname(__DIR__)).'/admin/views',
]);

$engine->set('app', [
    'class' => '\engine\application\web\Application'
]);