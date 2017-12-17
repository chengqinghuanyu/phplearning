<?php 
namespace Admin\Controller;
use Think\Controller;

class RegisterController extends Controller {
	/**
	*注册验证
	*/
	public function index(){
		$this->display();
    }
    public function check(){

    	$data['username']=$_POST['username'];
    	$data['realname']=$_POST['realname'];
    	$data['mobile']=$_POST['mobile'];
    	$data['age']=$_POST['age'];
    	$data['address']=$_POST['address'];
    	$data['email']=$_POST['email'];
    	$data['password']=$_POST['password'];
    	$data['passwordnew']=$_POST['passwordnew'];
    	
    	if(!trim($data['username'])){
			return show(0,'用户名不能为空');
		}
		if(!trim($data['realname'])){
			return show(0,'姓名不能为空');
		}
		
		if(!trim($data['mobile'])){
			return show(0,'电话不能为空');
		}

		if(!trim($data['password'])){
			return show(0,'密码不能为空');
		}

		if(!trim($data['passwordnew'])){
			return show(0,'确认密码不能为空');
		}

		if($data['password'] != $data['passwordnew']){
			return show(0,'密码不一致');
		}



		$ret = D('Admin')->setAdminByUserData($data);
		return show(1,'注册成功');
		


		
		
    }
    
}


?>