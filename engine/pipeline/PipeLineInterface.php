<?php
/**
 * tank-blog
 *
 * @author    liu hao<liu546hao@163.com>
 * @copyright liu hao<liu546hao@163.com>
 */

namespace engine\pipeline;

interface PipeLineInterface
{
    public function send($payLoad);

    public function then(StageInterface $stage);

    public function run();
}