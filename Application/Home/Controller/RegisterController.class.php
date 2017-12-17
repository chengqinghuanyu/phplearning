<?php 
namespace Home\Controller;
use Think\Controller;

class RegisterController extends Controller {
	/**
	*用户注册
	*/
	public function index(){
		$this->display();
    }
    public function check(){

    	$username=$_POST['username'];
    	$realname=$_POST['realname'];
    	$mobile=$_POST['mobile'];
    	$age=$_POST['age'];
    	$address=$_POST['address'];
    	$email=$_POST['email'];
    	$password=$_POST['password'];
    	$passwordnew=$_POST['passwordnew'];
    	
    	if(!trim($username)){
			return show(0,'用户名不能为空');
		}
		if(!trim($realname)){
			return show(0,'姓名不能为空');
		}
		
		if(!trim($mobile)){
			return show(0,'电话不能为空');
		}

		if(!trim($password)){
			return show(0,'密码不能为空');
		}

		if(!trim($passwordnew)){
			return show(0,'确认密码不能为空');
		}

		if($passwordnew != $password){
			return show(0,'密码不一致');
		}

		$ret = D('Home')->setAdminByUserData($username);
		return show(1,'注册成功');
		


		
		
    }
    
}


?>