<?php
namespace Common\Model;
use Think\Model;

class MenuModel extends Model{
	private $_db = 'cms_menu';
	public function __construct(){
		$this->_db = M('menu');

	}
	public function insert($data=array()){
		if(!$data ||!is_array($data)){
			return 0;
		}
		return $this->_db->add($data);//在数据中新增记录
	}
	public function getMenus($data,$page,$pageSize=10){
		$data['status'] = array('neq',-1);//获取正常数据而不是删除的数据
		$offset = ($page - 1) * $pageSize;
		//$list = $this->_db->where($data)->order('menu_id asc')->limit($offset,$pageSize)->select();
		$list = $this->_db->where($data)->order('menu_id desc')->limit($offset,$pageSize)->select();
		//print_r();
		
		return $list;
	}
	public function getMenusCount($data=array()){
		$data['status'] = array('neq',-1);//获取正常数据而不是删除的数据
		return $this->_db->where($data)->count();
	}
}
?>
