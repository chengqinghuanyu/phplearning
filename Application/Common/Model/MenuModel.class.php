<?php
namespace Common\Model;
use Think\Model;

class MeneModel extends Model{
	private $_db = 'cms_menu';
	public function __construct(){
		$this -> _db = M('menu');
		//var_dump(_db);

	}
	public function insert($data=array()){
		if(!$data ||!is_array($data)){
			return 0;
		}
		return $this->_db->add($data);
	}
}
?>
