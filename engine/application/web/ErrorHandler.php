<?php
/**
 * User: liuhao
 * Date: 18-6-13
 * Time: 上午10:42
 */

namespace engine\application\web;


use engine\application\base\BaseErrorHandler;

class ErrorHandler extends BaseErrorHandler
{
    public function handleException(\Throwable $e)
    {
        echo '<pre>';
        print_r("Message: ".$e->getMessage());
        echo '<br>';
        print_r('Trace: '.$e->getTraceAsString());
    }

    public function handleError(int $code, string $message, $file, $line)
    {
        print_r("Error(code: {$code}): {$message} in file [{$file}] line [{$line}]");
    }

    public function handleShutDown()
    {
    }

}