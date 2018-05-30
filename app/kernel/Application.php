<?php
/**
 * User: liuhao
 * Date: 18-4-23
 * Time: 上午10:36
 */

namespace app\kernel;


class Application
{
    private $request = null;
    private $response = null;

    public function __construct()
    {
        Kernel::$app = $this;

        kernel::$rootPath = substr(__DIR__, 0, (0 - strlen(__NAMESPACE__)));
        $this->request = new Request();
        $this->response = new Response();
    }

    public function run()
    {
        try {
            $request = $this->getRequest();

            $response = $this->getResponse();

            $route = $request->getRouteParams();

            list($controller, $route) = $this->createController($route);

            $response->content = $controller->runAction($route, $request->queryParams());

            $response->send();
        } catch (\Throwable $e) {
            var_dump($e->getMessage());
            var_dump($e->getTraceAsString());
        }
    }

    public function getRequest()
    {
        return $this->request;
    }

    public function getResponse()
    {
        return $this->response;
    }

    protected function createController($route)
    {
        $cnt = count($route);

        if (($cnt === 0) || ($cnt > 2)) {
            $route = ['test', 'index'];
        } else if ($cnt === 1) {
            $route[] = 'index';
        }

        $className = '\app\controllers\\'.ucfirst($route[0]).'Controller';
        $controller = new $className();

        return [$controller, $route];
    }

    public function generateUrl(array $route = [], array $params = [])
    {
        $cnt = count($route);

        if (($cnt === 0) || ($cnt > 2)) {
            $route = ['test', 'index'];
        } else if ($cnt === 1) {
            $route[] = 'index';
        }

        $request = $this->getRequest();

        $server = $request->serverName();

        $url = '/index.php?'.$request->routeMark.'='.$route[0].'/'.$route[1];

        foreach ($params as $key => $value) {
            $url .= '&'.$key.'='.$value;
        }

        return $url;
    }
}