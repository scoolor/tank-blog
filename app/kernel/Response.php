<?php
/**
 * User: liuhao
 * Date: 18-4-23
 * Time: 上午10:39
 */

namespace app\kernel;


class Response
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