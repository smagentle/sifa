<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>司法鉴定信息管理系统</title>
<link rel="stylesheet" type="text/css" href="/sifa(4)/Public/Css/index.css" />
</head>

<body>
	<div class="top">
		<div class="hui"><img src="/sifa(4)/Public/images/hui.png" width="50" height="50"/></div>
		<div class="title"><h2>司法鉴定信息管理系统</h2></div>
		<div class="top_r">
			<a href=""><?php echo session('name'); ?></a>&nbsp;你好！&nbsp;&nbsp;
			<input type="text" id="showtime" value="" />&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="<?php echo U('Login/logout');?>"><img src="/sifa(4)/Public/images/exit.png" width="55" height="45" /></a>
		</div>
	</div>
	<div class="line"></div>
	<div class="left_menu">
		<div class="menu">
			<ul>
				<li class="jbxx">
					<a href="<?php echo U('Jbxx/jbxx');?>" target="_self">
						<img src="/sifa(4)/Public/images/jbxx.png" width="55" height="55" />鉴定录入
					</a>
				</li>
				<li class="bgcx">
					<a href="<?php echo U('Baogao/baogao');?>" target="_self">
						<img src="/sifa(4)/Public/images/bgcx.png" width="55" height="55"/>鉴定查询
					</a>
				</li>
				<li class="sys">
					<a href="<?php echo U('Sys/system');?>" target="_self">
						<img src="/sifa(4)/Public/images/system.png" width="55" height="55"/>系统维护
					</a>
				</li>
			</ul>
		</div>
	</div>
	<div class="right">
		<iframe class="iframe" src="/sifa(4)/index.php?s=/Home/Index/mainiframe">
			
		</iframe>
	</div>
	<div class="line"></div>
	<div class="footer">© 2016 <a href="http://www.pengyukeji.com" target="_blank">河北鹏宇电子科技有限公司</a> 版权所有</div>
</body>
<script type="text/javascript">
function ymdhis(){
    var obj = new Date();
    var y = obj.getFullYear();
    var m = obj.getMonth()+1;
    var d = obj.getDate();
    var h = obj.getHours();
    var i = obj.getMinutes();
    var s = obj.getSeconds();
    if(m<10)m="0"+m;
    if(d<10)d="0"+d;
    if(h<10)h="0"+h;
    if(i<10)i="0"+i;
    if(s<10)s="0"+s;
    var time = y+'-'+m+'-'+d+' '+h+':'+i+':'+s;
    document.getElementById("showtime").value=time;
    setTimeout(ymdhis,1000);
}
ymdhis();
</script>
</html>