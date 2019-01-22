<?php
namespace core;
/**
 * @author [孙世宝] <[<664588619@qq.com>]>
 */
class keen{

    public static  $classMap = array();
    public $assign;

    /**
     * 运行框架
     */
    static public function run(){
        //启动log系统
        \core\lib\log::init();
        //\core\lib\log::log($_SERVER,'server');
        $route = new \core\lib\route();

        $ctrlClass = $route->ctrl;
        $action = $route->action;
        $ctrlfile = APP.'/ctrl/'.$ctrlClass.'Ctrl.php';
        $ctrlClass = '\\'.MODULE.'\ctrl\\'.$ctrlClass.'ctrl';

        if(is_file($ctrlfile)){
            include $ctrlfile;
            $ctrl = new $ctrlClass();
            $ctrl->$action();
            \core\lib\log::log('ctrl:'.$ctrlClass.'     '.'action:'.$action);
        }else{
            throw new \Exception('找不到控制器'.$ctrlClass);
        }
    }

    /**
     * @param $class
     * @return bool
     * 自动引入类
     */
    static public function load($class){
        if(isset($classMap[$class])){
            return true;
        }else{
            $class = str_replace('\\','/',$class);
            $file = KEEN .'/'.$class.'.php';
            if(is_file($file)){
                include $file;
                self::$classMap[$class] = $class;
            }else{
                return false;
            }
        }
    }


    public function assign($name,$value){
        $this->assign[$name] = $value;
    }
    public function display($file){
        $filename = $file;
        $file = APP.'/view/'.$file;
        if(is_file($file)){
            \Twig_Autoloader::register();
            $loader = new \Twig_Loader_Filesystem(APP.'/view');
            $twig = new \Twig_Environment($loader,array(
                'cache'=>KEEN.'/log/twig',
                'debug'=>DEBUG
            ));

            $template = $twig->loadTemplate($filename);
            $template->display($this->assign ? $this->assign : array());
        }
    }


}