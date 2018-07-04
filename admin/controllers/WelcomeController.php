<?php
/**
 * User: liuhao
 * Date: 18-6-11
 * Time: 下午4:29
 */

namespace admin\controllers;


use engine\application\web\Controller;
use MongoDB\Client;

class WelcomeController extends Controller
{
    public function actionIndex()
    {
        $collection = (new Client())->test->users;

//        $insertOneResult = $collection->insertOne([
//            'username' => 'admin',
//            'email' => 'admin@example.com',
//            'name' => 'Admin User',
//        ]);
//
//        printf("Inserted %d document(s)\n", $insertOneResult->getInsertedCount());
//
//        var_dump($insertOneResult->getInsertedId());
        $cursor = $collection->find(['username' => 'admin',
            'email' => 'admin@example.com']);

        foreach ($cursor as $document) {
            var_dump($document['_id']);
        }
    }

}