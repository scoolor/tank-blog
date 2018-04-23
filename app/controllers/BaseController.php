<?php
/**
 * User: liuhao
 * Date: 18-4-23
 * Time: 上午11:11
 */

namespace app\controllers;


use App\kernel\Kernel;

class BaseController
{
    public function runAction($route, $params = [])
    {
        $action = 'action'.ucfirst($route[1]);

        return call_user_func([$this, $action], $params);
    }

    public function view(String $view = '', array $params = [])
    {
        $className = get_class($this);
        $start = strrpos($className, '\\');

        $dir = strtolower(substr($className, $start + 1, -10));

        $viewPath = Kernel::$rootPath.'app/views/'.$dir.'/'.$view.'.php';

        $content = $this->renderPhpFile($viewPath, $params);

        return $content;
    }

    public function renderPhpFile($filePath, $params = [])
    {
        ob_start();
        ob_implicit_flush(false);
        extract($params, EXTR_OVERWRITE);

        require($filePath);

        return ob_get_clean();
    }

    public function redirect(array $toRoute = [], array $params = [])
    {
        $response = Kernel::$app->getResponse();
        $url = Kernel::$app->generateUrl($toRoute, $params);

        return $response->redirect($url);
    }


}