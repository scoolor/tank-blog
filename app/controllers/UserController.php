<?php
/**
 * User: liuhao
 * Date: 18-4-23
 * Time: 下午2:19
 */

namespace app\controllers;


use App\kernel\Kernel;

class UserController extends BaseController
{
    public function actionCreate()
    {

        $Parsedown = new \Parsedown();

        $content = $Parsedown->text('Hello _Parsedown_!'); # prints: <p>Hello <em>Parsedown</em>!</p>
        return $this->view('create', ['content' => $content]);
    }

    public function actionStore()
    {
        $request = Kernel::$app->getRequest();
        echo '<pre>';

        var_dump($request->getPostData());exit;
    }
}