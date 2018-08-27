<?php
/**
 * User: liuhao
 * Date: 18-6-5
 * Time: 上午10:57
 */

namespace engine\application\base;


use engine\application\web\ErrorHandler;
use engine\application\web\httpStages\TransformRequest;
use engine\application\web\Request;
use engine\application\web\Response;
use engine\application\web\Router;
use engine\EngineZero;
use engine\pipeline\HttpPipeLine;
use Symfony\Component\Yaml\Exception\ParseException;
use Symfony\Component\Yaml\Yaml;

abstract class BaseApplication extends Component
{
    public $controllerNameSpace = '';
    public $controllerSuffix = 'Controller';
    public $actionPrefix = 'action';

    /**
     * BaseApplication constructor.
     * @param array $config
     * @throws \Exception
     */
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
        $this->getErrorHandler()->register();
        $this->init();
    }

    public function run()
    {
        try {
            $this->bootstrap();

            $request = $this->getRequest();

            $res = (new HttpPipeLine())
                ->send($request)
                ->then(new TransformRequest())
                ->run();

            $router = $this->getRouter();

            $router->dispatch($request);

            if (!($res instanceof Response)) {
                $response = $this->getResponse();
                $response->content = $res;
            } else {
                $response = $res;
            }

            return $response->send();

        } catch (\Exception $e) {
            var_dump($e->getMessage());
        }

    }

    public function init()
    {}

    /**
     * @return BaseRequest|Request
     * @throws \Exception
     */
    public function getRequest()
    {
        return $this->getComponent('request');
    }

    /**
     * @return Router | BaseRouter
     * @throws \Exception
     */
    public function getRouter()
    {
        return $this->getComponent('router');
    }

    /**
     * @return BaseResponse|Response
     * @throws \Exception
     */
    public function getResponse()
    {
        return $this->getComponent('response');
    }

    /**
     * @return BaseErrorHandler|ErrorHandler
     * @throws \Exception
     */
    public function getErrorHandler()
    {
        return $this->getComponent('error');
    }

    abstract protected function coreComponents():array;


    public function runAction(array $route,array $params = [])
    {
        list($controller, $actionID) = $this->createController($route);
        $res = $controller->runAction($actionID, $params);

        return $res;
    }

    public function bootstrap()
    {

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

    /**
     * @return void
     */
    public function initRouter()
    {
        $engine = EngineZero::instance();
        $routeFile = $engine->parseAlias('@route').'web.php';

        require $routeFile;
    }
}