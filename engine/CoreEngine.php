<?php
namespace engine;

/**
 * User: liuhao
 * Date: 18-5-30
 * Time: 上午11:10
 */

define('PROJECT_ROOT', __DIR__);

class CoreEngine extends BaseObject
{
    private $container = null;

    private $aliasMap = [];
    public $aliasFlag = '@';

    public function registerAlias(array $alias)
    {
        foreach ($alias as $key => $path) {
            if (!is_string($key) || !is_string($path)) {
                continue;
            }
            $key = trim($key, '/');
            $path = rtrim($path, '/');
            if (strpos($key, $this->aliasFlag) !== 0) {
                continue;
            }

            if (strpos($path, $this->aliasFlag) === 0) {
                $path = $this->parseAlias($path);
            }

            if ($path === false) {
                continue;
            }

            $pos = strpos($key, '/');
            if ($pos === false) {
                $aliasRoot = $key;
            } else {
                $aliasRoot = substr($key, 0, $pos);
            }

            if (isset($this->aliasMap[$aliasRoot])) {
                if (isset($this->aliasMap[$aliasRoot][$key])) {
                    $this->aliasMap[$aliasRoot][$key] = $path;
                } else {
                    array_push($this->aliasMap[$aliasRoot], [
                        $key => $path
                    ]);
                    krsort($this->aliasMap[$aliasRoot]);
                }
            } else {
                $this->aliasMap[$aliasRoot] = [
                    $key => $path
                ];
            }
        }
    }

    public function parseAlias(string $aliasKey)
    {
        trim($aliasKey, '/');
        if (strpos($aliasKey, $this->aliasFlag) !== 0) {
            return false;
        }

        $pos = strpos($aliasKey, '/');
        if ($pos === false) {
            $aliasRoot = $aliasKey;
        } else {
            $aliasRoot = substr($aliasKey, 0, $pos);
        }

        if (!isset($this->aliasMap[$aliasRoot])) {
            return false;
        }

        foreach ($this->aliasMap[$aliasRoot] as $key => $path) {
            if (strpos($aliasKey.'/', $key.'/') === 0) {
                return $path.'/'.substr($aliasKey, strlen($aliasRoot));
            }
        }
        return false;

    }


    protected function _autoload($className)
    {
        $classFile = $className;

        if (strpos($className, '\\') !== false) {

            $classFile = $this->parseAlias($this->aliasFlag.str_replace('\\', '/', $className).'.php');

            if ($classFile === false || !is_file($classFile)) {
                return;
            }

        }
        include($classFile);
    }

    public function setContainer(Container $container)
    {
        $this->container = $container;
    }

    public function getContainer() : Container
    {
        return $this->container;
    }

    public function set($name, array $contract, array $params = [])
    {
        $this->getContainer()->set($name, $contract, $params);
    }

    /**
     * @param $name
     * @param array $params
     * @param array $config
     * @return mixed|null
     */
    public function get($name, array $params = [], array $config = [])
    {
        return $this->getContainer()->get($name, $params, $config);
    }

    public function setSingleton($name, array $contract, array $params = [])
    {
        $this->getContainer()->setSingleton($name, $contract, $params);
    }

    public function generateObject($typeName, array $params = [])
    {
        if (is_string($typeName)) {
            return $this->getContainer()->get($typeName, $params);
        } else if (is_array($typeName) && isset($typeName['class'])) {
            $name = $typeName['class'];
            unset($typeName['class']);
            return $this->getContainer()->get($name, $params, $typeName);
        }
    }
}