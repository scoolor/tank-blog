<?php

namespace admin\controllers;


class CategoryController extends BaseController
{
    public function actionIndex()
    {
        return $this->view('index');
    }
}