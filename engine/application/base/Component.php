<?php
/**
 * User: liuhao
 * Date: 18-6-5
 * Time: 上午10:58
 */

namespace engine\application\base;


use engine\BaseObject;
use engine\EngineZero;

class Component extends BaseObject
{
    private $_components = [];

    public function loadComponents(array $components = [])
    {
        foreach ($components as $key => $value) {
            $this->_components[$key] = $value;
        }
    }

    /**
     * @param String $name
     * @return mixed|null
     * @throws \Exception
     */
    public function getComponent(String $name)
    {
        if (isset($this->_components[$name])) {
            $value = $this->_components[$name];
            if (is_object($value)) {
                return $value;
            } else {
                return EngineZero::instance()->generateObject($value);
            }
        } else {
            throw new \Exception("Component {$name} is not exists.");
        }
    }

    /**
     * @param $name
     * @return mixed|null
     * @throws \Exception
     */
    public function __get($name)
    {
        return $this->getComponent($name);
    }
}