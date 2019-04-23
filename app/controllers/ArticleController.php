<?php
/**
 * tank-blog
 *
 * @author    liu hao<liu546hao@163.com>
 * @copyright liu hao<liu546hao@163.com>
 */

namespace app\controllers;


class ArticleController extends BaseController
{
    public function getList()
    {
        $data = [
            'code' => 'success',
            'data' => [
                [
                    'id' => 123
                ],
                [
                    'id' => 345
                ]
            ]
        ];
        return json_encode($data);
    }
}