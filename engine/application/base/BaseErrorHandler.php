<?php
/**
 * User: liuhao
 * Date: 18-6-13
 * Time: 上午10:45
 */

namespace engine\application\base;


abstract class BaseErrorHandler extends Component
{
    public function register()
    {
        ini_set('display_errors', false);
        set_exception_handler([$this, 'handleException']);

        set_error_handler([$this, 'handleError']);

        register_shutdown_function([$this, 'handleShutDown']);
    }


    public function unRegister()
    {
        restore_error_handler();
        restore_exception_handler();
    }

    abstract public function handleException(\Throwable $e);

    abstract public function handleError(int $code, string $message, $file, $line);

    abstract public function handleShutDown();
}