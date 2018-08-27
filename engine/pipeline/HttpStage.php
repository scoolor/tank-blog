<?php
/**
 * tank-blog
 *
 * @author    liu hao<liu546hao@163.com>
 * @copyright liu hao<liu546hao@163.com>
 */

namespace engine\pipeline;

use engine\application\base\BaseRequest;
use engine\application\base\Component;
use engine\application\web\Request;

class HttpStage extends Component implements StageInterface
{
    /**
     * @var HttpPipeLine
     */
    public $pipeLine;

    public $stopFlag = false;

    public function handle()
    {

    }

    /**
     * @return Request | BaseRequest
     */
    public function getRequest()
    {
        return $this->pipeLine->request;
    }

    public function setPipeLine(PipeLineInterface $pipeLine)
    {
        $this->pipeLine = $pipeLine;
    }
}