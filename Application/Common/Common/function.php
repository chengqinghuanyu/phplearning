<?php
/***
*公用验证
*
*/
function show($status,$massage,$data=array()){
	//print_r($_POST);
	$result = array(
		'statu' => $status,
		'massage' => $massage,
		'data' => $data,
		);

	exit(json_encode($result));
	//echo json_encode($result);
}

function getMD5Password($password) {
		$pas = I($password);
	    //return MD5($pas.C('MD5_PRE'));
		return $pas = I($password);
}

function getMenuType($type){
	return $type=="1"?"后台":"前端";
}
function status($status){
	if($status==0){
		$str = "关闭";
	}elseif($status==1){
		$str = "正常";
	}elseif($status==-1){
		$str = "删除";
	}
	return $str;
}


?>