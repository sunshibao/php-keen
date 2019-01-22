<?php
namespace core\lib;
use \core\lib\conf;
/**
 * @author [孙世宝] <[<664588619@qq.com>]>
 */
class model extends \Medoo\Medoo {
    public function __construct(){
        $database = conf::all('database');
        try {
            parent::__construct($database);
        } catch (\PDOException $e) {
            p($e->getMessage());
        }
    }

    //查询一条
    public function getOne($id)
    {
        return $this->get($this->table,'*',array('id'=>$id));
    }

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