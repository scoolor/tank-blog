<?php
/**
 * User: liuhao
 * Date: 18-4-23
 * Time: 下午3:49
 */
use App\kernel\Kernel;

$action = Kernel::$app->generateUrl(['user', 'store']);

echo $content;
?>


<!--<form action="--><?//echo $action;?><!--" method="post">-->
<!--    <input type="text" name="aaa">-->
<!--    <input type="submit" value="submit">-->
<!--</form>-->
