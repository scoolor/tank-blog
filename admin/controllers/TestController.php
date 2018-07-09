<?php

namespace admin\controllers;


class TestController extends BaseController
{
    public function actionIndex()
    {
        return $this->view('index');
    }
}