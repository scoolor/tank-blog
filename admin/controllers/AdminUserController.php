<?php

namespace admin\controllers;


use root\models\AdminUser;


class AdminUserController extends BaseController
{
    public function actionIndex()
    {
        $userCollection = (new AdminUser())->getCollection();

        return $this->view('index', compact('userCollection'));
    }

    public function actionCreate()
    {
        return $this->view('create');
    }
}