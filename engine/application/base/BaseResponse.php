<?php
/**
 * User: liuhao
 * Date: 18-6-5
 * Time: 上午11:28
 */

namespace engine\application\base;


abstract class BaseResponse extends Component
{
    public $content;

    public function send()
    {
        $this->setHeader();

        echo $this->content;

        return;
    }

    public function setHeader(array $headers = [])
    {
        foreach ($headers as $name => $value) {
            header("$name: $value");
        }
    }

    public function redirect($url, $status = 302)
    {
        $this->setHeader([
            'Location' => $url,
        ]);
        header("HTTP/1.1 {$status} 302重定向");
    }
}