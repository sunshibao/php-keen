<?php
namespace app\model;
use \core\lib\model;

class articlesModel extends model
{
    //定义表名  
    public $table = 'articles';

    //查询全部  
    public function getAll()
    {
        return $this->select($this->table,'*');
    }

    //添加数据  
    public function add($data)
    {
        return $this->insert($this->table,$data);
    }

    //查询一条
    public function getOne($id)
    {
        return $this->get($this->table,'*',array('id'=>$id));
    }

    //修改一条
    public function setOne($id,$data)
    {
        return $this->update($this->table,$data,array('id'=>$id));
    }

    //删除一条
    public function delOne($id)
    {
        return $this->delete($this->table,array('id'=>$id));
    }
} 