<?php
/**
 * User: liuhao
 * Date: 18-4-23
 * Time: 上午11:10
 */

namespace app\controllers;


class TestController extends BaseController
{
    public function actionIndex()
    {
        return $this->view('index', ['ab']);
    }
}