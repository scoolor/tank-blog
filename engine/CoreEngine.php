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

    private $aliasMap = [];
    public $aliasFlag = '@';

    public function registerAlias(array $alias)
    {
        foreach ($alias as $key => $path) {
            if (!is_string($key) || !is_string($path)) {
                continue;
            }

            if (strpos($key, $this->aliasFlag) !== 0) {
                continue;
            }

            if (strpos($path, $this->aliasFlag) === 0) {
                $path = $this->parseAlias($path);
            }

            if ($path === false) {
                continue;
            }

            $aliaFragments = explode('/', $key);

            $currentMap = $this->aliasMap;
        }
    }

    public function parseAlias($aliasKey)
    {
        return false;
    }


    protected function _autoload($className)
    {
        $classFile = $className;

        if (strpos($className, '\\') !== false) {
            $classFile = $this->parseAlias($this->aliasFlag.str_replace('\\', '/', $className));

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

    public function generateObject($typeName)
    {
        return $this->getContainer()->get($typeName);
    }
}