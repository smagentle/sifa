<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="/sifa(4)/Public/Css/baogao.css" />
<title>无标题文档</title>
<script type="text/javascript" src="/sifa(4)/Public/Js/lhgcore.js"></script>
<script type="text/javascript" src="/sifa(4)/Public/Js/lhgcalendar.js"></script>
</head>

<body>
	<div class="title">
		<h3>鉴定报告查询</h3>
	</div>
	<div class="xinzeng">
		<h3><a href="<?php echo U('Jbxx/jbxx');?>" target="_parent">+新增鉴定</a></h3>
	</div>
	<div class="con">
		<form class="frm" method="post" action="<?php echo U('Baogao/index');?>">
			<div class="one">
				<input type="text" name="bianhao" value="" />
				<input type="submit" id="button" value="按鉴定书编号查询" />
			</div>
			<!-- <div class="line"></div>
			<div class="two">
				<input type="text" name="danwei" value="" />
				<input type="submit" id="button" value="按委托鉴定单位查询" />
			</div> -->
			<div class="line"></div>
			<div class="three">
				<input type="text" name="start" value="" id="c10" onclick="J.calendar.get({to:'c11,min'});" />
				&nbsp;至&nbsp;
				<input type="text" name="end" value="" id="c11" onclick="J.calendar.get({to:'c10,max'});" />
				<input type="submit" id="button" value="按鉴定日期查询" />
			</div>
		</form>
	</div>
	<div class="con1">
		<table width="99%">
			<tr class="contr">
				<td width="10%"><b>鉴定书编号</b></td>
				<td width="10%"><b>鉴定人姓名</b></td>
				<td width="35%"><b>委托单位</b></td>
				<td width="10%"><b>鉴定日期</b></td>
				<td width="25%"><b>鉴定结果</b></td>
				<td width="10%"><b>操作</b></td>
			</tr>
			<?php if(is_array($res)): $i = 0; $__LIST__ = $res;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$jg): $mod = ($i % 2 );++$i;?><tr onmouseover='this.style.backgroundColor="#E0FFFF"' onmouseout="this.style.backgroundColor=''">
					<td><?php echo ($jg[bianhao]); ?></td>
					<td><?php echo ($jg[name]); ?></td>
					<td><?php echo ($jg[department]); ?></td>
					<td><?php echo ($jg[date]); ?></td>
					<td><?php echo ($jg[jieguo]); ?></td>
					<td><a href='<?php echo U("Printer/yijianshu1",array("id"=>"$jg[bianhao]"));?>' target="_BlANK">查看</a></td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</table>
	</div>
</body>
</html>