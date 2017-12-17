$(".btn").on("click",function(){
	
	var URL = "/web/phplearning/index.php?m=Home&c=Register&a=check";
	var datas = {
		username : $("#usename").val(),
		realname : $("#realname").val(),
		mobile : $("#mobile").val(),
		password : $("#password").val(),
		passwordnew : $("#passwordnew").val(),
		email : $("#email").val(),
		age : $("#age").val(),
		address : $("#address").val()
	}
	
	if(!$.trim(datas.username)){
		dialog.error("名称不能为空");
		return false;
	}
	if(!$.trim(datas.realname)){
		dialog.error("姓名不能为空");
		return false;
	}
	if(!$.trim(datas.mobile)){
		dialog.error("电话不能为空");
		return false;
	}
	if(!$.trim(datas.password)){
		dialog.error("密码不能为空");
		return false;
	}
	if(!$.trim(datas.passwordnew)){
		dialog.error("确认密码不能为空");
		return false;
	}
	if(datas.passwordnew !== datas.password){
		dialog.error("密码不一致，重输入");
		return false;
	}
//data = eval(data);
	$.ajax({
		type:"POST",
		data:datas,
		url:URL,
		contentType:"application/x-www-form-urlencoded",
		dataType:"json",
		success:function(res){
			console.log(res);
			if(res.statu == 0){
				return dialog.error(res.massage);
			}
			if(res.statu == 1){
				return dialog.success(res.massage,'/web/phplearning/index.php?m=Home&c=Index&a=index');
			}
		},
		error:function(res){
			console.log("err");
		}
	})

	
})