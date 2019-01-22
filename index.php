<?php
/**
 * 入口文件
 * 1.定义常量
 * 2.加载函数库
 * 3.启动框架
 * @author [孙世宝] <[<664588619@qq.com>]>
 */
define('KEEN',realpath('./'));
define('CORE',KEEN.'/core');
define('APP',KEEN.'/app');
define('MODULE','app');

define('DEBUG',true);

include "vendor/autoload.php";

if(DEBUG){
    //酷炫错误提示
    $whoops = new \Whoops\Run();
    $option = new \Whoops\Handler\PrettyPageHandler();
    $errorTitle = '框架出错了';
    $option->setPageTitle($errorTitle);
    $whoops->pushHandler($option);
    $whoops->register();
    ini_set('display_error','On');
}else{
    ini_set('display_error','Off');
}

include CORE.'/common/function.php';
include CORE.'/keen.php';
//自动加载类
spl_autoload_register('\core\keen::load');

\core\keen::run();
