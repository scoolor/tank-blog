<?php
/**
 * tank-blog
 *
 * @author    liu hao<liu546hao@163.com>
 * @copyright liu hao<liu546hao@163.com>
 */

namespace engine\application\web\httpStages;


use engine\pipeline\HttpStage;

class TransformRequest extends HttpStage
{
    public function handle()
    {
        $request = $this->getRequest();

        $request->aa = 'bb';
    }
}