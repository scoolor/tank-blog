<?php

namespace admin\controllers;


use root\models\AdminUser;


class AdminUserController extends BaseController
{
    public function actionIndex()
    {
        $userCollection = (new AdminUser())->getCollection();

        $result = $userCollection->find();

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
        $userCollection = (new AdminUser())->getCollection();

        $result = $userCollection->insertOne([
            'username' => 'test',
            'password' => '123456',
        ]);

        var_dump($result->getInsertedId());
    }


    public function actionUpdate()
    {
        $userCollection = (new AdminUser())->getCollection();

        $result = $userCollection->updateOne(
           ['username' => 'test'],
           ['$set', ['password' => '654321']]
        );

        var_dump($result->getUpsertedId());
    }
}