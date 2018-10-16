<?php
/**
 * User: liuhao
 * Date: 18-6-7
 * Time: 下午2:48
 */

namespace app\controllers;


use engine\application\web\Controller;

class WelcomeController extends Controller
{
    public function index()
    {
        echo "Welcome to Tank Blog!";
    }
}