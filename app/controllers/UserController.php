<?php
/**
 * User: liuhao
 * Date: 18-4-23
 * Time: 下午2:19
 */

namespace app\controllers;


class UserController extends BaseController
{
    public function actionCreate()
    {
        return $this->redirect(['user', 'store'], ['message' => 'heel']);
    }

    public function actionStore()
    {
        echo 'abc';
    }
}