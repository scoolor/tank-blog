<?php
/**
 * tank-blog
 *
 * @author    liu hao<liu546hao@163.com>
 * @copyright liu hao<liu546hao@163.com>
 */

namespace engine\pipeline;


class HttpPipeLine implements PipeLineInterface
{
    private $request;

    private $stageList = [];

    public function send($request)
    {
        $this->request = $request;

        return $this;
    }

    public function then(StageInterface $stage)
    {
        array_push($this->stageList, $stage);

        return $this;
    }

    public function run()
    {
        foreach ($this->stageList as $eachStage) {
            $eachStage->handle();
        }
    }
}