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

    /**
     * @param Request $request
     * @return Response
     * @throws \Exception
     */
    public function handle($request):Response
    {
        $response = $this->getResponse();

        $response->content = 'Welcome!';
        return $response;
    }

    /**
     * @return Request
     * @throws \Exception
     */
    public function getRequest()
    {
        return $this->getComponent('request');
    }

    /**
     * @return Response
     * @throws \Exception
     */
    public function getResponse():Response
    {
        return $this->getComponent('response');
    }

    protected function coreComponents(): array
    {
        return [
            'request' => [
                'class' => '\engine\application\web\Request',
            ],
            'response' => [
                'class' => '\engine\application\web\Response',
            ]
        ];
    }
}