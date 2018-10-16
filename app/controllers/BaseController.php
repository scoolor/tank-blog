<?php
/**
 * User: liuhao
 * Date: 18-4-23
 * Time: 上午11:11
 */

namespace app\controllers;


use engine\application\web\Controller;

class BaseController extends Controller
{
    public function index()
    {
        var_dump('Hello My Framework!');
    }
}