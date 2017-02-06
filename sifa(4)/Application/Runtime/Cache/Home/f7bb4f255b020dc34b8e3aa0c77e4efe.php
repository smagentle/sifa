<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="/sifa(4)/Public/Css/sys.css" />
<script type="text/javascript" src="/sifa(4)/Public/Js/jquery-1.4.4.min.js"></script>
<script type="text/javascript" src="/sifa(4)/Public/Js/jquery.reveal.js"></script>
<title>无标题文档</title>
</head>

<body>
	<div class='content'>
		<div class="jigou">
			<span>鉴定机构</span>
			<span id="addjigou"><a href="javascript:void(0);" data-reveal-id="myModal">+添加机构</a></span>
		</div>
		<div class="jgtable">
			<table>
				<tr class="gray">
					<td width="400">机构名称</td>
					<td width="200">许可证号</td>
					<td width="400">地址</td>
					<td width="100">邮编</td>
					<td width="300">联系人</td>
					<td width="200">联系电话</td>
				</tr>
				<?php if(is_array($dp)): $i = 0; $__LIST__ = $dp;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="con">
						<td align="left"><?php echo ($vo['dp_name']); ?></td>
						<td align="center"><?php echo ($vo['xukez']); ?></td>
						<td align="center"><?php echo ($vo['address']); ?></td>
						<td align="center"><?php echo ($vo['youbian']); ?></td>
						<td align="center"><?php echo ($vo['lianxiren']); ?></td>
						<td align="center"><?php echo ($vo['lianxiphone']); ?></td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</table>
		</div>
		<div class="space">&nbsp;&nbsp;</div>
		<div class="jigou">
			<span>专家信息</span>
			<span id="addjigou"><a href="javascript:void(0);" data-reveal-id="myModal1">+添加专家</a></span>
		</div>
		<div class="zjtable">
			<table>
				<tr class="gray">
					<td width="150">专家姓名</td>
					<td width="250">专家工作单位</td>
					<td width="150">专业</td>
					<td width="150">操作</td>
				</tr>
				<?php if(is_array($zhuanjia)): $i = 0; $__LIST__ = $zhuanjia;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr class="con">
						<td><?php echo ($vo['zjname']); ?></td>
						<td><?php echo ($vo['dp_name']); ?></td>
						<td><?php echo ($vo['zhuanye']); ?></td>
						<td><a href="<?php echo U('Sys/del',array('id' =>$vo['id']));?>">删除</a></td>
					</tr><?php endforeach; endif; else: echo "" ;endif; ?>
			</table>
		</div>
	</div>
	<div id="myModal" class="reveal-modal">
		<form name="add" method="post" action="<?php echo U('Sys/add');?>">
			<table>
				<tr>
					<td colspan="2"><h3>添加鉴定机构信息</h3></td>
				</tr>
				<tr>
					<td>机构名称：</td>
					<td><input name="jgname" type="text" class="input" size="20" /></td>
				</tr>
				<tr>
					<td>许可证号：</td>
					<td><input name="xukez" type="text" class="input" size="20" /></td>
				</tr>
				<tr>
					<td>地&nbsp;&nbsp;&nbsp;&nbsp;址：</td>
					<td><input name="address" type="text" class="input" size="20" /></td>
				</tr>
				<tr>
					<td>邮&nbsp;&nbsp;&nbsp;&nbsp;编：</td>
					<td><input name="youbian" type="text" class="input" size="20" /></td>
				</tr>
				<tr>
					<td>联&nbsp;系&nbsp;人：</td>
					<td><input name="lianxiren" type="text" class="input" size="20" /></td>
				</tr>
				<tr>
					<td>联系电话：</td>
					<td><input name="lianxiphone" type="text" class="input" size="20" /></td>
				</tr>
				<tr height="20"></tr>
				<tr>
					<td colspan="2" align="center"><input name="button" type="submit" class="input" size="20" value="添加"/></td>
				</tr>
				<tr>
					<td><a class="close-reveal-modal">&#215;</a></td>
				</tr>
			</table>
		</form>	
	</div>
	<div id="myModal1" class="reveal-modal1">
		<form name="addzj" method="post" action="<?php echo U('Sys/addzj');?>">
			<table>
				<tr>
					<td colspan="2"><h3>添加专家信息</h3></td>
				</tr>
				<tr>
					<td>专家姓名：</td>
					<td><input name="zjname" type="text" class="input" size="20" /></td>
				</tr>
				<tr>
					<td>工作单位：</td>
					<td><input name="dpname" type="text" class="input" size="20" /></td>
				</tr>
				<tr>
					<td>专&nbsp;&nbsp;&nbsp;&nbsp;业：</td>
					<td><input name="zhuanye" type="text" class="input" size="20" /></td>
				</tr>
				<tr height="20"></tr>
				<tr>
					<td colspan="2" align="center"><input name="button" type="submit" class="input" size="20" value="添加"/></td>
				</tr>
				<tr>
					<td><a class="close-reveal-modal">&#215;</a></td>
				</tr>
			</table>
		</form>	
	</div>
</body>
</html>