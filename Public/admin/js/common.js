/**
*添加按钮
*/
$("#button-add").on("click",function(){
	var url = SCOPE.add_url;
	window.location.href=url;
});
$("#singcms-button-submit").on("click",function(){
	var data = $("#singcms-form").serializeArray();
	console.log(data);
	var pushData ={};
	$(data).each(function(i){
		pushData[$(this).attr('name')] = $(this).attr('value');
	});
	console.log(pushData);
	//将数据post给服务器
	var url = SCOPE.save_url;
	var jump_url = SCOPE.jump_url;
	$.ajax({
		contentType:"application/x-www-form-urlencoded",
		type:"POST",
		dataType:"json",
		data:pushData,
		url:url,
		success:function(result){
			console.log(result);
			if(result.statu==1){
				return dialog.success(result.massage,jump_url);
			}else if(result.statu==0){
				return dialog.error(result.massage);
			}
		},
		error:function(result){
			console.log(result);
		}
	})

});