<?php
namespace Admin\Controller;
use Think\Controller;
class LoginController extends Controller{
	/**
	*登录验证
	*/
	public function index(){
		if(session('adminUser')){
			$this->redirect('/web/phplearning/Index.php?m=admin&c=index');
		}
		$this->display();
    }
    public function check(){
    	$user['username'] = $_POST['username'];
    	$user['password'] = $_POST['password'];
    	if(!trim($user['username'])){
			return show(0,'用户名不能为空');
		}
		
		if(!trim($user['password'])){
			return show(0,'密码不能为空');
		}

		$ret = D('admin') -> getAdminByUserData($user['username'],$user['password']);
		if(!$ret){
			return show(0,'该用户不存在！');
		}
		

		if($ret['password'] != getMD5Password($user['password'])){
			return show(0,'密码错误');
		}
		session('adminUser',$ret);
		return show(1,'登录成功');
		
    }
    public function checkout(){
    	session('adminUser',null);
    	//$this->redirect('/web/phplearning/index.php?m=admin&c=login');
    	$this-redirect('/web/phplearning/Index.php?m=admin&c=login');

    }
    
}