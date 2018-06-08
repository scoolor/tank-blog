<?php
/**
 * Created by PhpStorm.
 * User: tank
 * Date: 2018/6/8
 * Time: 23:25
 */

namespace admin\controllers;


class TestController extends BaseController
{
    public function actionIndex()
    {
        return $this->view('index');
    }
}