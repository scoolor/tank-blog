<?php
namespace engine;

/**
 * User: liuhao
 * Date: 18-5-30
 * Time: 上午11:12
 */

class EngineZero extends CoreEngine
{
    private static $instance = null;

    private function __construct(Configure $config = null)
    {
        //类自动加载机制,无法成功注册抛异常,添加此函数到队列之首
        spl_autoload_register([$this, '_autoload'], true, true);
    }

    private function __clone()
    {
        return self::$instance;
    }

    public static function instance(Configure $config = null)
    {
        if (is_null(self::$instance)) {
            self::$instance = new self($config);
        }

        return self::$instance;
    }
}