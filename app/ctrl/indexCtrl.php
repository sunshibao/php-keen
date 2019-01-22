<?php
namespace app\ctrl;
use core\lib\model;
use app\model\linksModel;

class indexCtrl extends \core\keen{
    public function index(){
        $model = new linksModel();

        $data['name'] = 'keen';
        $data['url'] = 'baidu.com';
        $result =$model->getAll();
        $result = 'hello';
        $this->assign('data',$result);
        $this->display('index/index.html');
    }


}