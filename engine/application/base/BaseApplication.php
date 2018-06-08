<?php
/**
 * User: liuhao
 * Date: 18-6-5
 * Time: 上午10:57
 */

namespace engine\application\base;


use engine\EngineZero;

abstract class BaseApplication extends Component
{
    public $controllerNameSpace = '';
    public $controllerSuffix = 'Controller';
    public $actionPrefix = 'action';

    public function __construct(array $config = [])
    {
        EngineZero::$app = $this;
        $this->registerAlias($config);
        unset($config['alias']);
        $components = $this->coreComponents();
        if (!empty($config['components']) && is_array($config['components'])) {
            foreach ($config['components'] as $name => $eachItem) {
                if (isset($components[$name])) {
                    $components[$name] = array_merge($components[$name], $config['components'][$name]);
                } else {
                    $components[$name] = $config['components'][$name];
                }
            }
        }
        $this->loadComponents($components);
        unset($config['components']);
        $this->loadDefaultValue($config);
    }

    public function run()
    {
        try {

            $request = $this->getRequest();

            $response = $this->handle($request);

            $response->send();

        } catch (\Exception $e) {
            var_dump($e->getMessage());
        }

    }

    /**
     * @return BaseRequest
     */
    abstract public function getRequest();

    /**
     * @return BaseResponse
     */
    abstract public function getResponse();


    /**
     * @param BaseRequest $request
     * @return BaseResponse
     */
    abstract public function handle($request);

    abstract protected function coreComponents():array;


    public function runAction(array $route,array $params = [])
    {
        list($controller, $actionID) = $this->createController($route);
        $res = $controller->runAction($actionID, $params);

        return $res;
    }

    /**
     * @param array $route
     * @return array
     */
    public function createController(array $route)
    {
        $controllerID = $route[0];
        $controllerName = EngineZero::formatToCamel($controllerID);
        $controllerClass = $this->controllerNameSpace.'\\'.$controllerName.$this->controllerSuffix;
        $controller = EngineZero::instance()->generateObject($controllerClass);

        $actionID = !empty($route[1]) ? $route[1] : $controller->defaultAction;
        $actionID = $this->actionPrefix.EngineZero::formatToCamel($actionID);

        return [$controller, $actionID];
    }

    public function registerAlias(array $config)
    {
        if (isset($config['alias']) && is_array($config['alias'])) {
            $aliasMap = [];
            $engine = EngineZero::instance();
            foreach ($config['alias'] as $name => $path) {
                if (strpos($name, $engine->aliasFlag) === 0 && is_string($path)) {
                    $aliasMap[$name] = $path;
                }
            }
            $engine->registerAlias($aliasMap);
        }
    }

    public function loadDefaultValue(array $config = [])
    {
        foreach ($config as $name => $value) {
            $this->$name = $value;
        }
    }
}