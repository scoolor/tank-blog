<?php
/**
 * User: liuhao
 * Date: 18-5-30
 * Time: 下午6:18
 */

namespace engine;


class Container extends BaseObject
{
    private $_contract = [];

    private $_params = [];

    private $_singletons = [];

    private $_reflections = [];

    private $_dependencies = [];

    /**
     *
     * 注册契约
     *
     * @param $name
     * @param array $contract
     * @param array $params
     *
     * $name    标识
     * $contract    契约
     * $params  可以指定参数
     */
    public function set($name, array $contract, array $params = [])
    {
        $this->_contract[$name] = $contract;
        $this->_params[$name] = $params;
        if(isset($this->_singletons[$name])) {
            unset($this->_singletons[$name]);
        }
    }

    public function setSingleton($name, array $contract, array $params = [])
    {
        $this->_contract[$name] = $contract;
        $this->_params[$name] = $params;
        $this->_singletons[$name] = null;
    }

    /**
     * @param $name
     * @param array $params
     * @param array $config
     * @return null
     *
     * $name    通过注册时指定的契约名,找到对应的契约,根据契约生成对象
     * $params  你可以指定参数
     * $config  在配置时指定的参数
     *
     *  config和params之间存在优先级关系
     */
    public function get($name, array $params = [], array $config = [])
    {
        if(isset($this->_singletons[$name])) {
            return $this->_singletons[$name];
        }

        if(!isset($this->_contract[$name])) {
            return $this->build($name, $params, $config);
        }
        if (isset($this->_contract[$name])) {
            $definition = $this->_contract[$name];
        }

        if (isset($definition['class'])) {
            $class = $definition['class'];
            unset($definition['class']);
            $params = array_merge($definition, $params);
            $object = $this->build($class, $params, $config);
        } else {
            $object = null;
        }

        if (array_key_exists($name, $this->_singletons)) {
            $this->_singletons[$name] = $object;
        }

        return $object;
    }

    public function build($name, array $params = [], array $config = [])
    {
        list($reflection, $dependencies) = $this->parseDependency($name);


    }

    public function parseDependency($name)
    {
        if (isset($this->_dependencies[$name]) && isset($this->_reflections[$name])) {
            return [$this->_reflections[$name], $this->_dependencies[$name]];
        }

        $reflection = new \ReflectionClass($name);
        $dependencies = [];


        $constructor = $reflection->getConstructor();
        if (!is_null($constructor)) {
            //php函数传入实参,按顺序赋值给形参.不支持按形参名指定赋值
            foreach ($constructor->getParameters() as $eachParameter) {

                if ($eachParameter->isDefaultValueAvailable()) {
                    $dependencies[] = $eachParameter->getDefaultValue();
                } else {
                    $className = $eachParameter->getClass();
                    $dependencies[] = $className ?? null;
                }
            }
        }

        $this->_reflections[$name] = $reflection;
        $this->_dependencies[$name] = $dependencies;

        return [$reflection, $dependencies];
    }
}