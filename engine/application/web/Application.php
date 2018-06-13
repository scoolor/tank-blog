<?php
/**
 * User: liuhao
 * Date: 18-6-5
 * Time: 上午10:56
 */

namespace engine\application\web;


use engine\application\base\BaseApplication;


class Application extends BaseApplication
{

    public function init()
    {

    }
    /**
     * @param Request $request
     * @return Response
     * @throws \Exception
     */
    public function handle($request):Response
    {
        list($route, $params) = $request->parse();

        $res = $this->runAction($route, $params);

        $response = $this->getResponse();
        $response->content = $res;
        return $response;
    }


    protected function coreComponents(): array
    {
        return [
            'request' => [
                'class' => '\engine\application\web\Request',
            ],
            'response' => [
                'class' => '\engine\application\web\Response',
            ],
            'error' => [
                'class' => 'engine\application\web\ErrorHandler',
            ],
        ];
    }
}