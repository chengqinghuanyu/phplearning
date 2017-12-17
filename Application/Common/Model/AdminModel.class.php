<?php
namespace Common\Model;
use Think\Model;

class AdminModel extends Model{
	//model层次是在控制层调用
	private $_db = 'cms_admin';
	public function __construct(){
		$this -> _db = M('admin');
		//var_dump(_db);

	}
	public function setAdminByUserData($username){
		// $ret = $this -> _db -> where('username="'.$username.'"') -> find();
		// return $ret;
		header("Content-Type:text/html; charset=utf-8");
    	$Dao = M("Admin");

	    // 构建写入的数据数组
	    $data['username'] = $_POST['username'];
    	$data['realname'] = $_POST['realname'];
    	$data['mobile'] = $_POST['mobile'];
    	$data['age'] = $_POST['age'];
    	$data['address'] = $_POST['address'];
    	$data['email'] = $_POST['email'];
    	$data['password'] = md5(I($_POST['password']).C('MD5_PRE'));
    	$data['passwordnew'] = md5(I($_POST['passwordnew']).C('MD5_PRE'));

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
		$psd = getMD5Password($password);
		//print_r($psd);//exit();
		$ret['username'] = $this -> _db -> where('username="'.$username.'"') -> find();
		$ret['password'] = $this -> _db -> where('username="'.$psd.'"') -> find();
		
		return $ret;
	}
}
?>
