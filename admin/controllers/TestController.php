<?php

namespace admin\controllers;


use root\models\TestUser;


class TestController extends BaseController
{
    public function actionIndex()
    {
        $userModel = new TestUser();

        $result = $userModel->find();

        $responseData = [];

        foreach ($result as $each) {
            $responseData[] = [
                'username' => $each['username'],
                'password' => $each['password'],
            ];
        }

        return $this->view('index', compact('responseData'));
    }

    public function actionCreate()
    {
        $userModel = new TestUser();
        $userModel->insertOne([
            'username' => 'test-user',
            'password' => '123456',
        ]);
        $this->redirect(['admin', 'test', 'index']);
    }

    public function actionLogin()
    {
        return json_encode(['code' => 's']);
    }

}