<?php
namespace Common\Model;
use Think\Model;

class HomeModel extends Model{
	//model层次是在控制层调用
	private $_db = 'cms_users';
	public function __construct(){
		$this -> _db = M('users');
		//var_dump(_db);

	}
	public function setAdminByUserData($username){
		// $ret = $this -> _db -> where('username="'.$username.'"') -> find();
		// return $ret;
		header("Content-Type:text/html; charset=utf-8");
    	$Dao =  M('users');

	    // 构建写入的数据数组
	    $data['username'] = $_POST['username'];
    	$data['realname'] = $_POST['realname'];
    	$data['mobile'] = $_POST['mobile'];
    	$data['age'] = $_POST['age'];
    	$data['address'] = $_POST['address'];
    	$data['email'] = $_POST['email'];
    	$data['password'] = md5($_POST['password']);
    	$data['passwordnew'] = md5($_POST['passwordnew']);

	    // 写入数据
	    // print_r($data);
	    // exit();
	    $Dao -> create($data);
	    // print_r($Dao -> create($data));
	    // exit();
	    $Dao -> add();
	    //print_r($lastInsId = $Dao->add());
	    //exit();
	    if($lastInsId = $Dao->add()){
	    	$Dao->save($data);
	        return 1;
	    } else {
	    	return 0;
	        //$this->error('数据写入错误！');
	    }

		

	}
	public function getAdminByUserData($username,$password){
		$ret['username'] = $this -> _db -> where('username="'.$username.'"') -> find();
		$ret['password'] = $this -> _db -> where('password="'.$username.'"') -> find();
		return $ret;
	}
}
?>
