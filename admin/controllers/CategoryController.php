<?php
/**
 * User: liuhao
 * Date: 18-7-2
 * Time: 下午5:28
 */

namespace admin\controllers;


class CategoryController extends BaseController
{
    public function actionIndex()
    {
        return $this->view('index');
    }
}