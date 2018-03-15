<?php
namespace Admin\Controller;
use Think\Controller;
class MenuController extends CommonController{
	/**
	*菜单管理
	*/
	public function index(){
		/*分页操作*/
		$data = array();
        if(isset($_REQUEST['type'])&&in_array($_REQUEST['type'],array(0,1))){
            $data['type']=intval($_REQUEST['type']);
            $this->assign('type',data['type']);
        }else{
            $this->assign('type',-1);
        }
		$page = $_REQUEST['p']?$_REQUEST['p']:1;
		$pageSize = $_REQUEST['pageSize'] ? $_REQUEST['pageSize'] : 3;
		$menus = D('Menu')->getMenus($data,$page,$pageSize);//菜单数据

		$menusCount = D('Menu')->getMenusCount($data);

		$res = new \Think\Page($menusCount,$pageSize);//think自带分页
		$pageRes = $res->show();//获取数据展示出来
		$this->assign('pageRes',$pageRes);
		//var_dump($pageRes);
		$this->assign('menus',$menus);
		$this->display();
    }
    public function add(){
    	if($_POST){
    		//print_r($_POST);
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

    		$menuId = D("menu")->insert($_POST);
    		//print_r($menuId);
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