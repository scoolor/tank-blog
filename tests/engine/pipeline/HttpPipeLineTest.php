<?php
/**
 * tank-blog
 *
 * @author    liu hao<liu546hao@163.com>
 * @copyright liu hao<liu546hao@163.com>
 */

namespace tests\engine\pipeline;


use engine\pipeline\HttpPipeLine;
use tests\BaseTestCase;

class HttpPipeLineTest extends BaseTestCase
{
    public function testSend()
    {
        $request = null;
        $httpPipe = new HttpPipeLine();

        $result = $httpPipe->send($request);

        $this->assertInstanceOf('engine\pipeline\HttpPipeLine', $result);
        
    }
}