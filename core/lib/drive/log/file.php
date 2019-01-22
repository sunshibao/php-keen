<?php
namespace core\lib\drive\log;
use core\lib\conf;
/**
 * @author [孙世宝] <[<664588619@qq.com>]>
 */
class file{
    public $path;
    public function __construct()
    {
        $conf = conf::get('OPTION','log');
        $this->path = $conf['PATH'];
    }

    public function log($message,$file = 'log'){
        /**
         * 确定文件存储位置是否存在
         * 新建目录
         * 2写入日志
         */
        if(!is_dir($this->path.date('Ymd'))){
            mkdir($this->path.date('Ymd'),0777,true);
         }
        return file_put_contents($this->path.date('Ymd').'/'.$file.'.php',time('YmdHis').json_encode($message).PHP_EOL,FILE_APPEND);
    }
}