<?php
namespace app\ctrl;
use core\lib\model;

class homeCtrl extends \core\keen{
    public function index(){
        $result = 'hello';
        $this->assign('data',$result);
        $this->display('welcome.html');
    }

}