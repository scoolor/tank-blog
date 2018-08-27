<?php
/**
 * tank-blog
 *
 * @author    liu hao<liu546hao@163.com>
 * @copyright liu hao<liu546hao@163.com>
 */

namespace engine\application\web;


use engine\application\base\BaseRouter;
use engine\EngineZero;

class Router extends BaseRouter
{
    public function dispatch($request)
    {
        $method = strtolower($request->requestMethod());
        $uri = $request->requestUri();
        if (isset($this->routeMap[$method][$uri])) {
            $info = $this->routeMap[$method][$uri];
            $engine = EngineZero::instance();
            var_dump($info);
        }
    }
}