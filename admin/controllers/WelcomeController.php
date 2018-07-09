<?php

namespace admin\controllers;


use engine\application\web\Controller;
use root\database\mongodb\MongoDB;

class WelcomeController extends Controller
{
    public function actionIndex()
    {
        $db = MongoDB::instance();
        $collection = $db->users;

        $result = $collection->find();
        var_dump($result);
    }

}