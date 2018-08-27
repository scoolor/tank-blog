<?php
/**
 * User: liuhao
 * Date: 18-6-5
 * Time: 上午10:56
 */

namespace engine\application\web;


use engine\application\base\BaseApplication;

/**
 * Class Application
 * @package engine\application\web
 *
 *
 */
class Application extends BaseApplication
{

    public function init()
    {

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