<?php
/**
 * tank-blog
 *
 * @author    liu hao<liu546hao@163.com>
 * @copyright liu hao<liu546hao@163.com>
 */

/**
 * @param $msg
 * @param int $level
 * @param bool $highlight
 */
function dump($msg, $level = 10, $highlight = true)
{
    \engine\foundation\output\VarDump::dump($msg, $level, $highlight);
}

function findNameByPattern($name, $extension, $dir = './')
{
    $nameList = scandir($dir);
    $path = '';

    $pattern = '/.*?'.$name.'.*?'.$extension.'$/';

    if ($nameList !== false) {
        foreach ($nameList as $each) {
            if (preg_match($pattern, $each)) {
                $path = $dir.$each;
                break;
            }
        }
    }
    return $path;
}