<?php
namespace Admin\Controller;
use Think\Controller;
class MenuController extends Controller{
	/**
	*登录验证
	*/
	public function index(){
		
		$this->display();
    }
    public function add(){
    	if($_POST){
    		print_r($_POST);
    		if(!isset($_POST['name'])||!$_POST['name']){
    			return show(0,'菜单名不能为空！');
    		}
    		if(!isset($_POST['m'])||!$_POST['m']){
    			return show(0,'模块名不能为空！');
    		}
    		if(!isset($_POST['c'])||!$_POST['c']){
    			return show(0,'控制器名不能为空！');
    		}
    		if(!isset($_POST['f'])||!$_POST['f']){
    			return show(0,'方法名不能为空！');
    		}

    		$menuId = D("Menu")->insert($_POST);
    		if($menuId){
    			show(1,'新增成功',$menuId);
    		}else{
    			show(0,'新增失败',$menuId);
    		}
    	}else{
    		$this->display();
    	}
    	

    	}
    
}