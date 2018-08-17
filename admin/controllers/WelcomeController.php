<?php

namespace admin\controllers;


use engine\application\web\Controller;

class WelcomeController extends Controller
{
    public function actionIndex()
    {
        header("Access-Control-Allow-Origin:*");
        return $this->view('index');
    }

}