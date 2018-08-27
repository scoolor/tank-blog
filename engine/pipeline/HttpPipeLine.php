<?php
/**
 * tank-blog
 *
 * @author    liu hao<liu546hao@163.com>
 * @copyright liu hao<liu546hao@163.com>
 */

namespace engine\pipeline;


use engine\application\base\Component;

class HttpPipeLine extends Component implements PipeLineInterface
{
    public $request;

    private $stageList = [];

    public function send($request)
    {
        $this->request = $request;

        return $this;
    }

    public function then(StageInterface $stage)
    {
        $stage->setPipeLine($this);
        array_push($this->stageList, $stage);

        return $this;
    }

    public function run()
    {
        foreach ($this->stageList as $eachStage) {
            $eachStage->handle();
            if ($eachStage->stopFlag) {
                break;
            }
        }
    }
}