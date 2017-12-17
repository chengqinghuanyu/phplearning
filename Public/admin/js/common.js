/**
*添加按钮
*/
$("#button-add").on("click",function(){
	var url = SCOPE.add_url;
	window.location.href=url;
})
$("#singcms-button-submit").on("click",function(){
	var data = $("#singcms-form").serializeArray();
	console.log(data);
	var pushData ={};
	$(data).each(function(i){
		pushData[this.name]= this.value;
	});
	console.log(pushData);
	//将数据post给服务器
	var url = SCOPE.save_url;
	var jump_url = SCOPE.jump_url;
	$.post(url,pushData,function(result){
		alert(1);
		if(result.status==1){
			return dialog.success(result.message,jump_url);
		}else if(result.status==0){
			return dialog.error(result.message);
		}
	},"json")

})