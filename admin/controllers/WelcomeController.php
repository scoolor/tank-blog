<?php
/**
 * User: liuhao
 * Date: 18-6-11
 * Time: 下午4:29
 */

namespace admin\controllers;


use engine\application\web\Controller;
use root\database\mongodb\MongoDB;

class WelcomeController extends Controller
{
    public function actionIndex()
    {
        $db = MongoDB::instance();
        $collection = $db->users;
    }

}