<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta http-equiv="Refresh" content="2;URL=<?php echo U('Login/login');?>" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link type="text/css" rel="stylesheet" href="/sifa/Public/css/msg.css">
<title>提示信息</title>
</head>
<body>
	<div class="msg">
		<div class="top"></div>
		<div class="con">
			<div id="img"><img src="/sifa/Public/images/waring.png"></div>
			<div id="text">您还没有登录，请先登录！</div>
		</div>
		<div class="bottom">
			<a href="<?php echo U('Login/login');?>">如果您的浏览器没有自动跳转，请点击这里</a>
		</div>
	</div>
</body>
</html>