<?php
/**
 * tank-blog
 *
 * @author    liu hao<liu546hao@163.com>
 * @copyright liu hao<liu546hao@163.com>
 */

namespace engine\application\base;


use engine\application\web\Request;
use engine\EngineZero;
use Symfony\Component\Yaml\Yaml;

class BaseRouter extends Component
{
    protected $routeMap = [];

    public function __construct()
    {
        $engine = EngineZero::instance();
        $routeFile = $engine->parseAlias('@route');
        $this->loadRoute($routeFile.'web.yaml');
    }

    protected function loadRoute($routeFile)
    {
        if (file_exists($routeFile)) {
            $routeConfig = Yaml::parseFile($routeFile);
            foreach ($routeConfig as $value) {
                $this->routeMap[$value['method']][$value['path']] = $value;
            }
        }
    }

    /**
     * @param $request Request | BaseRequest
     */
    public function dispatch($request)
    {

    }
}