<?php
/**
 * User: liuhao
 * Date: 18-7-2
 * Time: 下午4:35
 */

namespace admin\controllers;


class AdminUserController extends BaseController
{
    public function actionIndex()
    {
        return $this->view('index');
    }
}