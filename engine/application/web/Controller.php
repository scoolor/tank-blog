<?php
/**
 * User: liuhao
 * Date: 18-6-7
 * Time: 上午9:37
 */

namespace engine\application\web;


use engine\application\base\BaseController;
use engine\application\exception\FileNotFoundException;
use engine\EngineZero;

/**
 * Class Controller
 * @package engine\application\web
 */
class Controller extends BaseController
{
    public $layout = 'layout/index';

    public $viewPath = '@view';

    /**
     * @param $view
     * @param array $params
     * @return string
     * @throws FileNotFoundException
     */
    public function view($view, array $params = [])
    {
        $filePath = $this->getViewFilePath($view);

        if (file_exists($filePath)) {
            $content = $this->renderPhpFile($filePath, $params);
            return $this->loadLayout($content);
        } else {
            throw new FileNotFoundException("File [{$filePath}] not found!");
        }
    }

    protected function getViewFilePath($view)
    {
        $engine = EngineZero::instance();
        $viewPath = rtrim($engine->parseAlias($this->viewPath), '/');
        $dirName = '';

        if (strpos($view, '/') === false) {
            $controllerName = self::getClassName();
            $startPos = strrpos($controllerName, '\\') + 1;
            $stopPos = 0 - strlen(EngineZero::$app->controllerSuffix);
            $name = substr($controllerName, $startPos, $stopPos);
            $dirName = EngineZero::formatToSnake($name).'/';
        }

        $filePath = $viewPath.'/'.$dirName.$view.'.php';
        return $filePath;
    }

    //渲染php文件
    protected function renderPhpFile($filePath, array $params = [])
    {
        //打开输出缓冲区
        ob_start();
        ob_implicit_flush(false);
        extract($params, EXTR_OVERWRITE);

        require($filePath);

        return ob_get_clean();
    }

    protected function loadLayout($content)
    {
        $engine = EngineZero::instance();

        $viewPath = rtrim($engine->parseAlias($this->viewPath), '/');

        $layoutFile = $viewPath.'/'.$this->layout.'.php';

        return $this->renderPhpFile($layoutFile, ['content' => $content, 'domain' => 'http://www.tankblog.com']);
    }

    /**
     * @param array $route
     * @param int $statusCode
     * @throws \Exception
     */
    public function redirect(array $route = [], $statusCode = 302)
    {
        return EngineZero::$app->getResponse()->redirect(Url::generateUrl($route), $statusCode);
    }
}