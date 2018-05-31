<?php
/**
 * User: liuhao
 * Date: 18-5-30
 * Time: 下午6:17
 */

namespace engine;

/**
 * Class Configure
 * @package engine
 *
 * 配置对象,根据配置数组生成配置对象
 *
 * 会有一些配置数组的处理逻辑
 *
 * 提供遍历方法
 *
 */
class Configure extends BaseObject implements \Iterator
{
    private $position = 0;

    private $configureMap = [];

    public function __construct(array $config = [])
    {
        $this->configureMap = $config;
        $this->position = 0;
    }

    public function addConfig(array $config = [])
    {
        $this->configureMap = array_merge($this->configureMap, $config);
    }

    public function current()
    {
        return $this->configureMap[$this->position] ?? null;
    }

    public function next()
    {
        $this->position++;
    }

    public function key()
    {
        return $this->position;
    }

    public function valid()
    {
        return isset($this->configureMap[$this->position]);
    }

    public function rewind()
    {
        $this->position = 0;
    }

}