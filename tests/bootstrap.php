<?php
/**
 * tank-blog
 *
 * @author    liu hao<liu546hao@163.com>
 * @copyright liu hao<liu546hao@163.com>
 */

require_once dirname(__DIR__).'/vendor/autoload.php';

$engine = engine\EngineZero::instance();

$engine->registerAlias([
    '@root' => dirname(__DIR__),
    '@app'  => dirname(__DIR__).'/app',
    '@view' => dirname(__DIR__).'/app/views',
]);

$engine->set('app', [
    'class' => '\engine\application\web\Application'
]);