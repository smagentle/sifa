<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="/sifa(4)/Public/css/login.css" />
<!--<script type="text/javascript" language="javascript" src="/sifa(4)/Public/js/code.js"></script>-->
<title>登录—司法鉴定信息管理系统</title>
<script>
	window.onload = function(){
	    document.getElementById('username').focus();
	}
</script>
</head>

<body>
	<div class="main">
		<!-- <img src="/sifa(4)/Public/images/login_bg.png" width="100%" height="100%"> -->
		<form action="<?php echo U('Login/index');?>" method="post">
			<div class="user">
				<b><font color="#FFFFFF">用户名：</font></b> <input type="text" id="username" name="username" value="" /><!-- onfocus="if (value =='请输入您的用户名'){value =''}" onblur="if(value == ''){value='请输入您的用户名'}" -->
			</div>
			<div class="pwd">
				<b><font color="#FFFFFF" style="letter-spacing:5px;">密码：</font></b> <input type="password" id="password" name="password" value="" /> <!-- onfocus="if (value =='请输入您的密码'){value =''}" onblur="if(value == ''){value='请输入您的密码'}" -->
			</div>
			<!--<div class="code">
				<input type="text" id="checkcode" name="checkcode" value="请输入验证码" onfocus="if (value =='请输入验证码'){value =''}" onblur="if(value == ''){value='请输入验证码'}"/>
				<img id="code_img" src="?m=user&a=captcha&r=<?php echo rand();?>">
				<a href="javascript:void(0)" onclick="document.getElementById('code_img').src='?m=user&a=captcha&r='+Math.random()">看不清？</a>
				<img style="width:17px; height:17px; margin-left:-9px; margin-top:5px;" src="common/images/refresh.png">
			</div>-->
			<div class="button">
				<input type="submit" id="login" name="login" value="登录" />
			</div>
	</div>
	</form>
	<div class="footer">© 2016 <a href="http://www.pengyukeji.com" target="_blank">河北鹏宇电子科技有限公司</a> 版权所有</div>
</body>
</html>