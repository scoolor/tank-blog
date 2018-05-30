<?php
namespace engine;

/**
 * User: liuhao
 * Date: 18-5-30
 * Time: 上午11:10
 */



class CoreEngine extends BaseObject
{
    private $container = null;

    private static $instance = null;

    private function __construct(Configure $config = null)
    {

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

    public function getContainer() : Container
    {
        return $this->container;
    }

    public function get($typeName)
    {
        $this->getContainer()->get($typeName);
    }

    public function generateObject()
    {

    }

    public function coreConfigure()
    {
        return [
            'container' => '\engine\Container'
        ];
    }
}