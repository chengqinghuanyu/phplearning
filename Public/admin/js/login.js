$(".btn").on("click",function(){
	var URL = "/web/phplearning/index.php?m=Admin&c=Login&a=check";
	var datas = {
		username : $("#usename").val(),
		password : $("#password").val()
	}
	
	if(!$.trim(datas.username)){
		dialog.error("名称不能为空");
		return false;
	}
	if(!$.trim(datas.password)){
		dialog.error("密码不能为空");
		return false;
	}
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
				return dialog.success(res.massage,'/web/phplearning/index.php?m=Admin&c=Index&a=index');
			}
		},
		error:function(res){
			console.log("err");
		}
	})

	
})