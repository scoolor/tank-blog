<?php
/**
 * User: liuhao
 * Date: 18-6-5
 * Time: 上午11:28
 */

namespace engine\application\web;

use Exception;
use engine\application\base\BaseRequest;

class Request extends BaseRequest
{
    private $queryParams = null;

    private $postData = [];

    public $routeMark = 'r';

    public function requestUri()
    {
        if (isset($_SERVER['REQUEST_URI'])) {
            $requestUri = $_SERVER['REQUEST_URI'];
            if ($requestUri !== '' && $requestUri[0] !== '/') {
                $requestUri = preg_replace('/^(http|https):\/\/[^\/]+/i', '', $requestUri);
            }
        } else {
            throw new Exception('request uri为空! ps:我们不支持IIS,请使用nginx');
        }

        return $requestUri;
    }

    public function requestMethod()
    {
        return $_SERVER['REQUEST_METHOD'] ?? '';
    }

    public function queryParams()
    {
        if ($this->queryParams == null) {
            $this->queryParams = $_GET;
        }
        return $this->queryParams;
    }

    public function documentRoot()
    {
        return $_SERVER['DOCUMENT_ROOT'] ?? '';
    }

    public function serverName()
    {
        return $_SERVER['SERVER_NAME'] ?? '';
    }

    public function getPostData()
    {
        if (empty($this->postData)) {
            $this->postData = $_POST;
        }
        return $this->postData;
    }

    public function parse()
    {
        $queryParams = $this->queryParams();
        $routeParams = $queryParams[$this->routeMark] ?? '';

        if (!empty($routeParams)) {
            $routeParams = explode('/', $routeParams);
        } else {
            $routeParams = [];
        }

        $routeCount = count($routeParams);

        switch ($routeCount) {
            case 0:
                $routeParams = ['welcome'];
                break;
            default:
                break;
        }

        unset($queryParams[$this->routeMark]);

        return [$routeParams, $queryParams];
    }
}