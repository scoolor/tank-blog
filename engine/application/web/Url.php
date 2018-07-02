<?php
/**
 * User: liuhao
 * Date: 18-7-2
 * Time: 下午4:41
 */

namespace engine\application\web;

use engine\BaseObject;

class Url extends BaseObject
{
    public static function generateUrl(array $route = [])
    {
        $number = count($route);
        $url = '';

        switch ($number) {
            case 1:
                break;
            case 2:

                break;
            case 3:
                $url = '/'.$route[0].'/index.php?r='.$route[1].'/'.$route[2];
                break;
            default:
                break;
        }

        return $url;
    }
}