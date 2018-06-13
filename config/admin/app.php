<?php
/**
 * User: liuhao
 * Date: 18-5-31
 * Time: 上午10:31
 */

return [
    'controllerNameSpace' => '\admin\controllers',
    'alias' => [

    ],
    'components' => [
        'request' => [
            'class' => '\engine\application\web\Request'
        ],
        'response' => [
            'class' => '\engine\application\web\Response'
        ],
        'error' => [
            'class' => 'engine\application\web\ErrorHandler',
        ],
    ]
];