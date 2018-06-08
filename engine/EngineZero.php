<?php
namespace engine;

use engine\application\web\Application;

/**
 * User: liuhao
 * Date: 18-5-30
 * Time: 上午11:12
 */

class EngineZero extends CoreEngine
{
    /**
     * @var Application
     */
    public static $app;

    private static $instance = null;

    private function __construct()
    {
        //类自动加载机制,无法成功注册抛异常,添加此函数到队列之首
        spl_autoload_register([$this, '_autoload'], true, true);
        $this->setContainer(new Container());
        $this->init();
    }

    private function init()
    {
    }

    private function __clone()
    {
        return self::$instance;
    }

    public static function instance(array $config = [])
    {
        if (is_null(self::$instance)) {
            self::$instance = new self($config);
        }

        return self::$instance;
    }

    public static function formatToCamel($string, $delimiter = "-_")
    {
        $res = preg_replace_callback("/[{$delimiter}].+?/", function ($matchs) use ($delimiter) {
            return strtoupper(ltrim($matchs[0], $delimiter));
        }, $string);

        return ucfirst($res);
    }

    public static function formatToSnake($string, $delimiter = "-")
    {
        $res = preg_replace_callback("/[A-Z].+?/", function ($matchs) use ($delimiter) {
            return $delimiter.strtolower($matchs[0]);
        }, $string);

        return ltrim($res, $delimiter);
    }
}