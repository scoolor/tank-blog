<?php
/**
 * User: liuhao
 * Date: 18-6-7
 * Time: 上午9:36
 */

namespace engine\application\base;


use engine\application\exception\MethodNotExistException;

abstract class BaseController extends Component
{
    public static function getClassName()
    {
        return get_called_class();
    }

    public $defaultAction = 'index';

    public function runAction($actionID, array $params = [])
    {
        if (method_exists($this, $actionID)) {
            return call_user_func_array([$this, $actionID], $params);
        } else {
            throw new MethodNotExistException('Method ['.$actionID.'] not exist in class ['.get_class($this).']');
        }

    }
}