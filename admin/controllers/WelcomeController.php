<?php

namespace admin\controllers;


use engine\application\web\Controller;

class WelcomeController extends Controller
{
    public function actionIndex()
    {
        return $this->view('index');
    }

}