<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
	<title>注册页面</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	<link rel="stylesheet" type="text/css" href="https://cdn.bootcss.com/bootstrap/3.3.0/css/bootstrap.min.css">
	
</head>
<body>
<div class="contain-full">
	<div class="row">
		<div class="col-md-7">
			<img src="http://5796163.s21i-5.faiusr.com/4/ABUIABAEGAAgi6mQqwUouMP28QEwfziKAQ.png">
		</div>
		<div class="col-md-5">
		<form >
			<div class="form-group">
				<label for="usename">用户名</label>
				<input type="text" class="form-control" id="usename">
			</div>
			<div class="form-group">
				<label for="realname">姓名</label>
				<input type="text" class="form-control" id="realname">
			</div>
			<div class="form-group">
				<label for="email">邮箱</label>
				<input type="email" class="form-control" id="email">
			</div>
			<div class="form-group">
				<label for="age">年龄</label>
				<input type="text" class="form-control" id="age">
			</div>
			<div class="form-group">
				<label for="mobile">电话</label>
				<input type="number" class="form-control" id="mobile">
			</div>
			<div class="form-group">
				<label for="address">地址</label>
				<input type="text" class="form-control" id="address">
			</div>
			
			<div class="form-group">
				<label for="password">密码</label>
				<input type="password" class="form-control" id="password">
			</div>
			<div class="form-group">
				<label for="passwordnew">确认密码</label>
				<input type="password" class="form-control" id="passwordnew">
			</div>
			<div class="checkbox">
			    <label>
			      <input type="checkbox"> 我同意
			    </label>
  			</div>
 			 <button  type=button class="btn btn-default">确认</button>

		</form>
			
		</div>
	</div>
</div>
<script src="https://cdn.bootcss.com/jquery/2.2.0/jquery.min.js"></script>
	<script src="https://cdn.bootcss.com/bootstrap/3.3.0/js/bootstrap.js"></script>
<script type="text/javascript" src="../phplearning/Public/admin/js/layer-v3.1.0/layer/layer.js?v=32234"></script>
<script type="text/javascript" src="../phplearning/Public/admin/js/dalog.js?v=111"></script>
<script type="text/javascript" src="../phplearning/Public/admin/js/register.js?v=32234aeaa"></script>

</body>
</html>