<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="/sifa(4)/Public/Css/print.css" />
<title>委托书</title>
<style>
body{ margin:0px auto;}
input{ font-size:16px;}
.tit{ width:100%;}
.bh{ width:99.5%;}
.bh input{ border:none; border-bottom:1px solid #333; font-size:16px;}
.table-ji{
	width:99.5%;
	/*border:1px solid #333;*/
	font-size:16px;
}
.bg,.bg1,.bg2,.bg3{ 
	width:99.62%; border-collapse:collapse; margin:2px 2px;
}
.bg td{ border:1px solid #333; height:30px;}
.bg td input{ width:99%; height:30px; border:none;}
#gdwidth{ width:17%; text-align:center;}
#gdwidth1{ width:17%; border-bottom:0px; text-align:center;}
#gdwidth2{ width:17%; border-top:0px; text-align:center;}
#gdwidth3{ width:12%; text-align:center;}
#gdwidth4{ width:42%;}
.bg1 td{ border:1px solid #333;}
.jdjgxx td{ border:none;}
.bg2 td{ border:1px solid #333; height:50px;}
.bg2 td input[name="wts[jdsx]"],input[name="wts[ycrq]"],input[name="wts[bctq]"],input[name="wts[hbjdr]"],input[name="wts[jdfy1]"],input[name="wts[jdshixian]"]{ width:4%; border:none; border-bottom:1px solid #333; text-align:center; font-size:16px;}
.bg3 td{ border:1px solid #333;}
.bg3 .qzgz{ width:100%; height:100%; margin-top:-10px;}
.bg3 .qzgz td{ border:none;}
.qzgz input{ border:none; width:15%; text-align:center; font-size:16px;}
input[name="wts[qtfs]"]{ border:none; width:400px; font-size:16px;}
input[name="wts[jdfy]"]{ border:none; width:80px; font-size:16px; text-align:center;}
input[name="wts[wtrname1]"]{ border:none; width:32%; text-align:center;}
input[name="wts[youji]"]{ border:none; width:78%;}
input[name="wts[bgsx]"]{width:99.5%; height:70%; font-size: 16px; background:#FFF; border:none;}
#feiyong{ height:40px;}
textarea[name="wts[jdcl]"],textarea[name="wts[jdfy]"],textarea[name="wts[jdfx]"],textarea[name="wts[ydsx]"]{border:none; text-align:left; font-size:16px; margin-top:0.5%; resize:none; line-height:2.0;}
</style>
</head>

<body>
		<table class="tit">
			<tr>
				<td align="center"><font size='6'>司法鉴定委托书</font></td>
			</tr>
			<tr class="hei"></tr>
		</table>
		<table class="bh">
			<tr>
				<td>编号：<input type="text" name="wts[bianhao]" value="<?php echo session('id');?>" readonly="readonly" /></td>
			</tr>
		</table>
		<div class="table-ji">
			<table class="bg">
				<tr>
					<td id="gdwidth">委托人/方</td>
					<td id="gdwidth4"><input type="text" name="wts[wtrname]" id="vcode1" value="<?php echo ($wts[0][wtrname]); ?>"  onkeyup="vcode()"/></td>
					<td id="gdwidth3">联系人</td>
					<td><input type="text" name="wts[lxrname]" id="vcode3" value="<?php echo ($wts[0][lxrname]); ?>" onfocus="down()" onblur="up()"/></td>
				</tr>
				<tr>
					<td id="gdwidth">联系地址</td>
					<td><input type="text" name="wts[lxaddress]" value="<?php echo ($sqs[0][sheng]); ?>省<?php echo ($sqs[0][shi]); ?>市<?php echo ($sqs[0][xian]); echo ($sqs[0][address]); ?>" readonly="readonly"/></td>
					<td id="gdwidth3">联系电话</td>
					<td><input type="text" name="wts[lxphone]" id="vcode4" value="<?php echo ($wts[0][lxphone]); ?>" onfocus="down()" onblur="up2()"/></td>
				</tr>
				<tr>
					<td id="gdwidth">委托日期</td>
					<td><input type="text" name="wts[wtdate]" value="<?php echo ($wts[0][wtdate]); ?>" /></td>
					<td id="gdwidth3">被鉴定人</td>
					<td><input type="text" name="wts[bjdrname]" value="<?php echo ($sqs[0][name]); ?>" readonly="readonly"/></td>
				</tr>
			</table>
			<table class="bg1" cellpadding="0" cellspacing="0">
				<tr><!-- 根据登录信息自动获取 -->
					<td id="gdwidth">司法鉴定机构</td>
					<td colspan="3">
						<table class="jdjgxx">
							<tr>
								<td>机构名称：</td>
								<td><?php echo ($dp[0]['dp_name']); ?></td>
								<td>许可证号：</td>
								<td><?php echo ($dp[0]['xukez']); ?></td>
							</tr>
							<tr>
								<td>地&nbsp;&nbsp;&nbsp;&nbsp;址：</td>
								<td><?php echo ($dp[0]['address']); ?></td>
								<td>邮&nbsp;&nbsp;&nbsp;&nbsp;编：</td>
								<td><?php echo ($dp[0]['youbian']); ?></td>
							</tr>
							<tr>
								<td>联&nbsp;系&nbsp;人：</td>
								<td><?php echo ($dp[0]['lianxiren']); ?></td>
								<td>联系电话：</td>
								<td><?php echo ($dp[0]['lianxiphone']); ?></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			<table class="bg2" cellpadding="0" cellspacing="0">
				<tr>
					<td id="gdwidth" align="center">委托鉴定事项<br />及&nbsp;&nbsp;&nbsp;用&nbsp;&nbsp;&nbsp;途</td>
					<td colspan="3"><?php echo ($a1[0][name]); echo ($b1[0][name]); ?></td>
				</tr>
				<tr>
					<td id="gdwidth" align="center">委托鉴定要求</td>
					<td colspan="3">由<input type="text" name="wts[wtrname1]" id="vcode2" value="<?php echo ($wts[0][wtrname1]); ?>" />委托我中心要求为<?php echo ($sqs[0][name]); ?>进行<?php echo ($a1[0][name]); echo ($b1[0][name]); ?></td>
				</tr>
				<tr>
					<td id="gdwidth" align="center">是否属于重新<br />鉴&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;定</td>
					<td colspan="3">
						<?php
 $jd = D('weituos'); $res = $jd -> field('cxjd') -> where("bianhao = '$id'") -> select(); if($res[0][cxjd] == 0){ echo "是"; }else{ echo "否"; } ?>
					</td>
				</tr>
				<tr height="80">
					<td id="gdwidth" align="center">检案摘要</td>
					<td colspan="3"><?php echo ($wts[0][jazy]); ?></td>
				</tr>
				<tr height="170">
					<td id="gdwidth1" align="center">鉴定材料<br />目录和数量</td>
					<td colspan="3">
						<?php echo ($wts[0][jdcl]); ?>
					</td>
				</tr>
				<tr height="170">
					<td id="gdwidth2" rowspan="2" align="center">鉴定费用<br />及<br />收取方式</td>
					<td colspan="3">
						<textarea name="wts[jdfy]" rows="5" cols="67%" onmousedown="s(event,this)"><?php echo ($wts[0][jdfy]); ?></textarea>
					</td>
				</tr>
				<tr id="feiyong">
					<td colspan="3" id="feiyong">共预计收费总计<input type="text" name="wts[jdfy1]" value="<?php echo ($wts[0][jdfy1]); ?>" />元</td>
				</tr>
				<tr>
					<td align="center">鉴定文书<br /><br />发送方式</td>
					<td>
						<?php
 $yj = D('weituos'); $res = $yj -> field('fsfs') -> select(); if($res[0][fsfs] == 0){ ?>
								<label><input type="radio" name="wts[fsfs]" value="0" checked = "checked" />自取</label><br /><br />
								<label><input type="radio" name="wts[fsfs]" value="1" disabled = "disabled" />邮寄地址：<input type="text" name="wts[youji]" id="vcode5" value="<?php echo ($wts[0][youji]); ?>"/></label><br /><br />
								<label><input type="radio" name="wts[fsfs]" value="2" disabled = "disabled" />其他方式（注明）<input type="text" name="wts[qtfs]" value="<?php echo ($wts[0][qtfs]); ?>" /></label>
						<?php
 }else{ if($res[0][fsfs] == 1){ ?>	
								<label><input type='radio' name='wts[fsfs]' value='0' disabled = "disabled" />自取</label><br /><br />
								<label><input type='radio' name='wts[fsfs]' value='1' checked = "checked" />邮寄地址：<input type='text' name='wts[youji]' id='vcode5' value='<?php echo ($wts[0][youji]); ?>'/></label><br /><br />
								<label><input type='radio' name='wts[fsfs]' value='2' disabled = "disabled" />其他方式（注明）<input type='text' name='wts[qtfs]' value='<?php echo ($wts[0][qtfs]); ?>' /></label>
						<?php
 }else{ ?>	
									<label><input type="radio" name="wts[fsfs]" value="0" disabled = "disabled" />自取</label><br /><br />
									<label><input type="radio" name="wts[fsfs]" value="1" disabled = "disabled" />邮寄地址：<input type="text" name="wts[youji]" id="vcode5" value="<?php echo ($wts[0][youji]); ?>"/></label><br /><br />
									<label><input type="radio" name="wts[fsfs]" value="2" checked = "checked" />其他方式（注明）<input type="text" name="wts[qtfs]" value="<?php echo ($wts[0][qtfs]); ?>" /></label>
						<?php
 } } ?>		
					</td>
				</tr>
				<tr style="border:none;height:140px;">&nbsp;</tr>	
				<tr>
					<td colspan="2">
						协议事项：<br /><br />
						1.&nbsp;&nbsp;&nbsp;鉴定机构应当严格依照有关技术规范保管和使用鉴定材料。鉴定委托人同意或者认可：<br />
						
						&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="wts[xysx]" value="0" disabled = "disabled"/>因鉴定需要耗尽检材；</label><br />
						&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="wts[xysx]" value="1" disabled = "disabled"/>因鉴定需要可能损坏检材；</label><br />
						&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="wts[xysx]" value="2" disabled = "disabled"/>鉴定完成之后无法完整退还检材；</label><br />
						&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="wts[xysx]" value="3" disabled = "disabled"/>检材留样保存3个月；</label><br />
						
						2.&nbsp;&nbsp;&nbsp;鉴定时限：从协议签订之日起<input type="text" name="wts[jdshixian]" value="<?php echo ($wts[0][jdshixian]); ?>" />个工作日完成。<br />

						&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="wts[xysx1]" value="0" disabled = "disabled"/>遇复杂、疑难、特殊的技术问题，或者检验过程确需较长时间的，延长<input type="text" name="wts[ycrq]" value="<?php echo ($wts[0][ycrq]); ?>" />个工作日；</label><br />
						
						3.&nbsp;&nbsp;&nbsp;特殊情形鉴定：<br />
						
						&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="wts[xysx2]" value="0" disabled = "disabled"/>需要对女性作妇科检查；</label><br />
						&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="wts[xysx2]" value="1" disabled = "disabled"/>需要对未成年人的身体进行检查；</label><br />
						&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="wts[xysx2]" value="2" disabled = "disabled"/>需要对被鉴定人进行法医精神病鉴定；</label><br />
						&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="wts[xysx2]" value="3" disabled = "disabled"/>需要到现场提取检材；</label><br />
						&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="wts[xysx2]" value="4" disabled = "disabled"/>需要进行尸体解剖。</label><br />
						
						4.<label><input type="checkbox" name="wts[xysx3]" value="0" disabled = "disabled"/>需要补充或者重新提取鉴定材料的，延长<input type="text" name="wts[bctq]" value="<?php echo ($wts[0][bctq]); ?>"/>个工作日。</label><br />
						&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="wts[xysx3]" value="1" disabled = "disabled"/>委托人要求鉴定人回避。被要求回避的鉴定人姓名<input type="text" name="wts[hbjdr]" value="<?php echo ($wts[0][hbjdr]); ?>"/>。</label><br />
						5.&nbsp;&nbsp;&nbsp;鉴定过程中如需变更委托书内容，由协议双方协议确定。
					</td>
				</tr>
				<tr>
					<td id="gdwidth" align="center">其他约定事项</td>
					<td>
						<textarea name="wts[ydsx]" rows="2" cols="67%"><?php echo ($wts[0][ydsx]); ?></textarea>
					</td>
				</tr>
				<tr>
					<td id="gdwidth" align="center">协议变更事项</td>
					<td><input type="text" name="wts[bgsx]" value="<?php echo ($wts[0][bgsx]); ?>"/></td>
				</tr>
				<tr height="140">
					<td id="gdwidth" align="center">鉴定风险提示</td>
					<td>
						<textarea name="wts[jdfx]" rows="7" cols="67%"><?php echo ($wts[0][jdfx]); ?>
						</textarea>
					</td>
				</tr>
			</table>
			<table class="bg3">
				<tr height="150">
					<td id="gdwidth3">
						<table class="qzgz">
							<tr>
								<td colspan="2">委托人（机构）<br />（签名或者盖章）</td>
							</tr>
							<tr height="40"></tr>
							<tr>
								<td colspan="2" align="right">
									<input type="text" name="wts[qzyear]" value="<?php echo ($wts[0][qzyear]); ?>" />年
									<input type="text" name="wts[qzmonth]" value="<?php echo ($wts[0][qzmonth]); ?>" />月
									<input type="text" name="wts[qzday]" value="<?php echo ($wts[0][qzday]); ?>" /><font style="margin-right:10px;">日</font>
								</td>
							</tr>
						</table>						
					</td>
					<td id="gdwidth3">
						<table class="qzgz">
							<tr>
								<td colspan="2">接受委托的鉴定机构<br />（签名、盖章）</td>
							</tr>
							<tr height="40"></tr>
							<tr>
								<td colspan="2" align="right">
									<input type="text" name="wts[qz1year]" value="<?php echo ($wts[0][qz1year]); ?>" />年
									<input type="text" name="wts[qz1month]" value="<?php echo ($wts[0][qz1month]); ?>" />月
									<input type="text" name="wts[qz1day]" value="<?php echo ($wts[0][qz1day]); ?>" /><font style="margin-right:10px;">日</font>
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						备注
						&nbsp;&nbsp;1.此委托书签订之日即为受理之日<br />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.本委托书一式两份，其中一份委托人保存，一份司法鉴定中心存档
					</td>
				</tr>
			</table>
		</div>
		<p>说明：1.涉及选择项目的，确定后需将√</p>
		
		<script>
		var xy1=document.getElementsByName("wts[xysx]");//复选框1
		var x1=<?php echo ($fx); ?>;
		for(var i=0;i<xy1.length;i++){
			for(var k in x1){
				if(xy1[i].value==x1[k].name){
					xy1[i].checked=true;
				}
			}
		}
		var xy2=document.getElementsByName("wts[xysx1]");//复选框2
		var x2=<?php echo ($fc); ?>;
		for(var i=0;i<xy2.length;i++){
			for(var k in x2){
				if(xy2[i].value==x2[k].name){
					xy2[i].checked=true;
				}
			}
		}
		var xy3=document.getElementsByName("wts[xysx2]");//复选框3
		var x3=<?php echo ($fv); ?>;
		for(var i=0;i<xy3.length;i++){
			for(var k in x3){
				if(xy3[i].value==x3[k].name){
					xy3[i].checked=true;
				}
			}
		}
		var xy4=document.getElementsByName("wts[xysx3]");//复选框4
		var x4=<?php echo ($fb); ?>;
		for(var i=0;i<xy4.length;i++){
			for(var k in x4){
				if(xy4[i].value==x4[k].name){
					xy4[i].checked=true;
				}
			}
		}
	</script>
</body>
</html>