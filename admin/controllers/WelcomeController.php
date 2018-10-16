<?php

namespace admin\controllers;


class WelcomeController extends BaseController
{
    public function index()
    {
        header("Access-Control-Allow-Origin:*");
        return $this->view('index');
    }

}