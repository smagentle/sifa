<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="/sifa(4)/Public/Css/lanrenzhijia.css" />
<!-- <script type="text/javascript" src="/sifa(4)/Public/Js/lhgcore.js"></script>
<script type="text/javascript" src="/sifa(4)/Public/Js/lhgcalendar.js"></script> -->
<script type="text/javascript" src="/sifa(4)/Public/Js/checkIdcard.js"></script>
<title>司法鉴定</title>
</head>

<body>
<ul id="tabs">
  <li><a id="tab" href="#" title="申请书">第1步&nbsp;&nbsp;申请书</a></li>
  <li><a id="tab0" href="#" title="决定书">第2步&nbsp;&nbsp;决定书</a></li>
  <li><a id="tab1" href="#" title="委托书">第3步&nbsp;&nbsp;委托书</a></li>
  <li><a id="tab2" href="#" title="回避认定书">第4步&nbsp;&nbsp;回避认定书</a></li>
  <li><a id="tab3" href="#" title="接谈笔录">第5步&nbsp;&nbsp;接谈笔录</a></li>
  <li><a id="tab4" href="#" title="鉴定完毕">第6步&nbsp;&nbsp;鉴定完毕</a></li>
</ul>
<div id="content">
  <div id="申请书">
  	<form action="<?php echo U('Jbxx/index',array('id'=>'shenqs'));?>" method="post">
	  <table class="tit">
	  	<tr>
			<td align="center"><font size='6'>法医鉴定申请书</font></td>
		</tr>
	  </table>
	  <table class="con" align="right">
	  	<tr class="hei"></tr>
	  	<tr>
			<td><?php echo session('dp'); ?>：</td>
		</tr>
	  	<tr class="hei"></tr>
	  	<tr>
			<td>
				&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				申请人<input type="text" name="sqs[name]" value=""/>,
				性别<input type="text" name="sqs[sex]" value="" />,
				<input type="text" name="sqs[year]" value="" />年
				<input type="text" name="sqs[month]" value="" />月
				<input type="text" name="sqs[day]" value="" />日出生，
			</td>
		</tr>
		<tr class="hei"></tr>
		<tr>
			<td>
				系<input type="text" name="sqs[sheng]" value="" />省
				<input type="text" name="sqs[shi]" value="" />市
				<input type="text" name="sqs[xian]" value="" />县（区）
				<input type="text" name="sqs[address]" maxlength="15" value="" />人。
			</td>
		</tr>
		<tr class="hei"></tr>
		<tr>
			<td>
				身份证号：<input type="text" id="card" name="sqs[idcard]" maxlength="18" value="" />
			</td>
		</tr>
		<tr class="hei"></tr>
		<tr>
			<td>
				因<input type="text" name="sqs[sgyear]" value="" />年
				<input type="text" name="sqs[sgmonth]" value="" />月
				<input type="text" name="sqs[sgday]" value="" />日
				<input type="text" name="sqs[sghour]" value="" />时
				<input type="text" name="sqs[sgsec]" value="" />分,
				在<input type="text" name="sqs[sgaddress]" maxlength="15" value=""/>
			</td>
		</tr>
		<tr class="hei"></tr>
		<tr>
			<td>
				<input type="text" name="sqs[sgaddress1]" maxlength="13" value=""/>地点，被（他人用）
				<input type="text" name="sqs[gjssbw]" maxlength="16" value=""/>
			</td>
		</tr>
		<tr class="hei"></tr>
		<tr>
			<td>
				<input type ="text" name="sqs[gjssbw1]" maxlength="25" value="" />部位受伤，出现
				<input type ="text" name="sqs[zhengz]"  maxlength="6" value="" />
			</td>
		</tr>
		<tr class="hei"></tr>
		<tr>
			<td>
				<input type ="text" name="sqs[zhengz1]" maxlength="18" value="" />症状。
				当时于<input type ="text" name="sqs[yiyuan]" maxlength="12" value="" />医院住
			</td>
		</tr>
		<tr class="hei"></tr>
		<tr>
			<td>
				院（门诊）治疗，诊断为：<input type="text" name="sqs[zhenduan]" maxlength="27" value="" />；
			</td>
		</tr>
		<tr class="hei"></tr>
		<tr>
			<td>
				后于<input type="text" name="sqs[zyyear]" value="" />年
				<input type="text" name="sqs[zymonth]" value="" />月
				<input type="text" name="sqs[zyday]" value="" />日在
				<input type="text" name="sqs[zyyiyuan]" maxlength="11" value="" />医院住院（门诊）治疗，诊
			</td>
		</tr>
		<tr class="hei"></tr>
		<tr>
			<td>
				断为<input type="text" name="sqs[zyzhenduan]" maxlength="21" value="" />
				&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="sqs[zy1year]" value="" />年
				<input type="text" name="sqs[zy1month]" value="" />月
				<input type="text" name="sqs[zy1day]" value="" />日转
			</td>
		</tr>
		<tr class="hei"></tr>
		<tr>
			<td>
				入<input type="text" name="sqs[zy1yiyuan]" maxlength="10" value="" />医院住院（门诊）治疗。诊断
				<input type="text" name="sqs[zy1zhenduan]" maxlength="15" value="" />。
			</td>
		</tr>
		<tr class="hei"></tr>
		<tr>
			<td>
				特此申请：
				<?php if(is_array($buwei)): $i = 0; $__LIST__ = $buwei;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><label><?php echo ($vo["name"]); ?><input type="radio" name="sqs[buwei]" value="<?php echo ($vo["id"]); ?>" /></label><?php endforeach; endif; else: echo "" ;endif; ?>
			</td>
		</tr>
		<tr class="hei"></tr>
		<tr>
			<td>
				鉴定类别：
				<?php if(is_array($leibie)): $i = 0; $__LIST__ = $leibie;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><label><?php echo ($vo["name"]); ?>(<input type="radio" name="sqs[leibie]" value="<?php echo ($vo["id"]); ?>" />)</label>
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					<?php
 $i++; if($i == 4){ echo "<br /><br />
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; } endforeach; endif; else: echo "" ;endif; ?>
			</td>
		</tr>
		<tr class="hei"></tr>
		<tr>
			<td>
				伤残鉴定分类：
				<?php if(is_array($fenlei)): $i = 0; $__LIST__ = $fenlei;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><label><?php echo ($vo["name"]); ?><input type="radio" name="sqs[fenlei]" value="<?php echo ($vo["id"]); ?>" /></label><?php endforeach; endif; else: echo "" ;endif; ?>
			</td>
		</tr>
		<tr class="hei"></tr>
		<tr>
			<td>
				其他鉴定：<br />
				<textarea cols="65" rows="2" name="sqs[qtjd]"></textarea>
			</td>
		</tr>
		<tr class="hei"></tr>
		<tr>
			<td class="qianzi">
				申&nbsp;&nbsp;请&nbsp;&nbsp;人：<input type="text" name="sqs[shenqr]" value="" />(签字)<br /><br />
				联系电话：<input type="text" name="sqs[phone]" value="" /><br /><br />
				代&nbsp;&nbsp;理&nbsp;&nbsp;人：<input type="text" name="sqs[dailiren]" value="" />(签字)
				关系：<input type="text" name="sqs[guanxi]" value="" />
				<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="sqs[sqyear]" value="" />年
				<input type="text" name="sqs[sqmonth]" value="" />月
				<input type="text" name="sqs[sqday]" value="" />日
			</td>
		</tr>
		<tr class="hei_b"></tr>
	</table>
	<table class="but">
		<tr>
			<td colspan="3" align="center" id="button">
				<input type="submit" value="保&nbsp;存"/>&nbsp;&nbsp;&nbsp;&nbsp;
				<a href='<?php echo U("Printer/shenqing",array("id"=>"$id"));?>' target="_blank"><input type="button" value="打&nbsp;印" /></a>
			</td>
		</tr>
	</table>
	</form>
  </div>
  <script>
  	function vcode(){
  		$v1 = document.getElementById("vcode1");
  		$v2 = document.getElementById("vcode2");
  		//$v5 = document.getElementById("vcode5");
  		$v2.value = $v1.value;
  		//$v5.value = $v2.value;
	}
  	function down(){
  		if(document.getElementById("vcode1").value == ''){
  			alert('委托人/方不能为空！');
  		}
  	}
  	function up(){
        $v3 = document.getElementById("vcode3");
        $v5 = document.getElementById("vcode5");
        $v4 = document.getElementById("vcode4");
        $v0 = document.getElementById("vcode0");
        $v5.value=$v0.value;
        if($v3.value != $v4.value){
            $v5.value += $v3.value+$v4.value;
        }else{
            $v5.value += $v4.value; 
        }
    }
  	function s(e,a)
  	{
  		 if ( e && e.preventDefault )
  	            e.preventDefault();
  		else 
  		window.event.returnValue=false;
  			a.focus();
  			
  	}
</script>
  <div id="决定书" class="jds">
  	<form action="<?php echo U('Jbxx/index',array('id'=>'jds'));?>">
		<table>
			<tr>
				<td align="center"><font size="6"><?php echo session('dp'); ?></font></td>
			</tr>
			<tr>
				<td align="center"><font size="6">司法医学鉴定受理决定书</font></td>
			</tr>
		</table>
		<table>
			<tr>
				<td align="right"><font size="3"><?php echo ($dp[0][titzi]); ?>司鉴办字[20<input type="text" name="jds[zi]"> 第（<?php echo ($dp[0][bhao]); ?>）<input type="text" name="jds[hao]">号]</font></td>
			</tr>
		</table>
		<table>
			<tr>
				<td align="left">
					<input type="text" name="jds[sqname]" style="border-bottom:1px solid #333;width:180px;">（申请人或委托机构：）
				</td>
			</tr>
			<tr>
				<td>
					&nbsp;&nbsp;&nbsp;&nbsp;由<input type="text" name="jds[you]" style="border-bottom:1px solid #333;width:180px;">委托，关于<input type="text" name="jds[gy]" style="border-bottom:1px solid #333;width:150px;">的司法医学鉴定委托书及材料，经<input type="text" name="jds[year]" style="border-bottom:1px solid #000000;width:70px;">年
				</td>
			</tr>
			<tr>
				<td>
					<input type="text" name="jds[mouth]" style="border-bottom:1px solid #000000;">月<input type="text" name="jds[day]" style="border-bottom:1px solid #000000;">日，由<?php echo session('dp'); ?>审核，根据中华人民共和国司法部令第132号《司法鉴定程
				</td>
			</tr>
			<tr>
				<td>
					序通则》第十一条、第十二条、第十六条，决定予以受理进行<input type="text" name="jds[bw]" style="border-bottom:1px solid #000000;width:50px;">部位，<input type="text" name="jds[ssjd]" style="border-bottom:1px solid #000000;width:120px;">损伤程度鉴定。
				</td>
			</tr>
		</table><br/>
		<table>
			<tr>
				<td align="right"><?php echo session('dp'); ?></td>
			</tr>
			<tr>
				<td align="right"><input type="text" name="jds[y]" style="width:60px;">年<input type="text" name="jds[m]">月<input type="text" name="jds[d]">日</td>
			</tr>
		</table><br/>
		<strong>请提前做好以下几项工作：</strong><br>
		<font size="3">
			1、备好鉴定费，在鉴定前缴纳，同时带身份证或户口本原件、复印件。<br/>
			2、收到本通知十日内向我中心提交以下材料：<br/>
			（1）被鉴定人的住院病历、诊断证明书、会诊意见原件或加盖治疗单位印章复印件。<br/>
			（2）被鉴定人的住院志、医嘱单、检验报告、医学影像检查报告单、特殊检查同意书、手术<br/>
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;同意书、病理资料、护理记录等病历资料原件或该有治疗医院印章的复印件。<br/>
			（3）有关医院门诊病历及检验报告，单位诊断证明原件或加盖治疗单位印章的复印件。<br/>
			3、根据被鉴定人所受伤害情况，需要转入指定医院进行观察治疗。<br/>
			4、请被鉴定人于<input type="text" name="jds[dm]" style="border-bottom:1px solid #000000;"> 月<input type="text" name="jds[dd]" style="border-bottom:1px solid #000000;"> 日，到我中心进行鉴定。<br/>
		</font><br/><br/>
		<center>
			<input type="submit" value="保 存" style="background:#0099FF; color:#FFFFFF;width:120px;height:30px;font-weight:bold;cursor:pointer;"/>&nbsp;&nbsp;
			<a href='<?php echo U("Printer/juedings",array("id"=>"$id"));?>' target="_blank"><input type="botton" value="打 印" style="background:#0099FF; color:#FFFFFF;width:120px;height:30px;font-weight:bold;cursor:pointer;"></a>
		</center>
  	</form>
  </div>
  <div id="委托书">
	<form action="<?php echo U('Jbxx/index',array('id'=>'weits'));?>" method="post">
		<table class="tit">
			<tr>
				<td align="center"><font size='6'>司法鉴定委托书</font></td>
			</tr>
			<tr class="hei"></tr>
		</table>
		<table class="bh">
			<tr>
				<td>编号：<input type="text" name="wts[bianhao]" value="<?php echo session('id');?>" readonly="readonly" /></td><!-- 需要自动生成 -->
			</tr>
		</table>
		<div class="table-ji">
			<table class="bg">
				<tr>
					<td id="gdwidth">委托人/方</td>
					<td><input type="text" name="wts[wtrname]" id="vcode1" value=""  onkeyup="vcode()" /></td>
					<td id="gdwidth">联系人</td>
					<td><input type="text" name="wts[lxrname]" id="vcode3" value="" onfocus="down()"/></td>
				</tr>
				<tr>
					<td id="gdwidth">联系地址</td>
					<td><input type="text" name="wts[lxaddress]" id="vcode0" value="" /></td>
					<td id="gdwidth">联系电话</td>
					<td><input type="text" name="wts[lxphone]" id="vcode4" value="" onblur="up()"/></td>
				</tr>
				<tr>
					<td id="gdwidth">委托日期</td>
					<td><input type="text" name="wts[lxaddress]" value="<?php echo date('Y-m-d');?>" /></td>
					<td id="gdwidth">被鉴定人</td>
					<td><input type="text" name="wts[bjdrname]" value="" /></td>
				</tr>
			</table>
			<table class="bg1">
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
								<td>地&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;址：</td>
								<td><?php echo ($dp[0]['address']); ?></td>
								<td>邮&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;编：</td>
								<td><?php echo ($dp[0]['youbian']); ?></td>
							</tr>
							<tr>
								<td>联&nbsp;&nbsp;系&nbsp;&nbsp;人：</td>
								<td><?php echo ($dp[0]['lianxiren']); ?></td>
								<td>联系电话：</td>
								<td><?php echo ($dp[0]['lianxiphone']); ?></td>
							</tr>
						</table>
					</td>
				</tr>
			</table>
			<table class="bg2">
				<tr>
					<td id="gdwidth" align="center">委托鉴定事项及&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;用&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;途</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td id="gdwidth" align="center">委托鉴定要求</td>
					<td colspan="3"></td>
				</tr>
				<tr>
					<td id="gdwidth" align="center">是否属于重新鉴&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;定</td>
					<td colspan="3">
						<label><input type="radio" name="wts[cxjd]" value="0" />是</label>
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
						<label><input type="radio" name="wts[cxjd]" value="1" checked="checked"/>否</label>
					</td>
				</tr>
				<tr height="80">
					<td id="gdwidth" align="center">检案摘要</td>
					<td colspan="3"></td>
				</tr>
				<tr height="200">
					<td id="gdwidth1" align="center">鉴定材料<br />目录和数量</td>
					<td colspan="3">
						<textarea name="wts[jdcl]" rows="5" cols="67%" onmousedown="s(event,this)"></textarea>
					</td>
				</tr>
				<tr height="200">
					<td id="gdwidth2" rowspan="2" align="center">鉴定费用<br />及<br />收取方式</td>
					<td colspan="3">
						<textarea name="wts[jdfy]" rows="5" cols="67%" onmousedown="s(event,this)"></textarea>
					</td>
				</tr>
				<tr id="feiyong">
					<td colspan="3" id="feiyong">共预计收费总计<input type="text" name="wts[jdfy1]" value="" />元</td>
				</tr>
				<tr>
					<td align="center">鉴定文书<br /><br />发送方式</td>
					<td>
						<label><input type="radio" name="wts[fsfs]" value="1" />自取</label><br /><br />
						<label><input type="radio" name="wts[fsfs]" value="2" />邮寄地址：<input type="text" name="wts[youji]"value=""/></label><br /><br />
						<label><input type="radio" name="wts[fsfs]" value="3" />其他方式（注明）<input type="text" name="wts[qtfs]" value="" /></label>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						协议事项：<br /><br />
						1.&nbsp;&nbsp;&nbsp;鉴定机构应当严格依照有关技术规范保管和使用鉴定材料。鉴定委托人同意或者认可：<br />
						&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="wts[xysx]" value="1" />因鉴定需要耗尽检材；</label><br />
						&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="wts[xysx]" value="2" />因鉴定需要可能损坏检材；</label><br />
						&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="wts[xysx]" value="3" />鉴定完成之后无法完整退还检材；</label><br />
						&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="wts[xysx]" value="4" />检材留样保存3个月；</label><br />
						2.&nbsp;&nbsp;&nbsp;鉴定时限：从协议签订之日起<input type="text" name="wts[jdshixian]" value="30" />个工作日完成。<br />
						&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="wts[xysx1]" value="1" />遇复杂、疑难、特殊的技术问题，或者检验过程确需较长时间的，延长<input type="text" name="wts[ycrq]" value="30" />个工作日；</label><br />
						3.&nbsp;&nbsp;&nbsp;特殊情形鉴定：<br />
						&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="wts[xysx2]" value="1" />需要对女性作妇科检查；</label><br />
						&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="wts[xysx2]" value="2" />需要对未成年人的身体进行检查；</label><br />
						&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="wts[xysx2]" value="3" />需要对被鉴定人进行法医精神病鉴定；</label><br />
						&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="wts[xysx2]" value="4" />需要到现场提取检材；</label><br />
						&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="wts[xysx2]" value="4" />需要进行尸体解剖。</label><br />
						4.<label><input type="checkbox" name="wts[xysx3]" value="1" />需要补充或者重新提取鉴定材料的，延长<input type="text" name="wts[bctq]" value=""/>个工作日。</label><br />
						&nbsp;&nbsp;&nbsp;<label><input type="checkbox" name="wts[xysx3]" value="2" />委托人要求鉴定人回避。被要求回避的鉴定人姓名<input type="text" name="wts[hbjdr]" value="无"/>。</label><br />
						5.&nbsp;&nbsp;&nbsp;鉴定过程中如需变更委托书内容，由协议双方协议确定。
					</td>
				</tr>
				<tr>
					<td id="gdwidth" align="center">其他约定事项</td>
					<td>
						<textarea name="wts[ydsx]" rows="2" cols="67%">当对所作出的鉴定意见有异议时，应当申请到《河北省司法鉴定专家委员会》进行复核性鉴定，不在本中心无理取闹。</textarea>
					</td>
				</tr>
				<tr>
					<td id="gdwidth" align="center">协议变更事项</td>
					<td><input type="text" name="wts[bgsx]" value="无"/></td>
				</tr>
				<tr height="140">
					<td id="gdwidth" align="center">鉴定风险提示</td>
					<td>
						<textarea name="wts[jdfx]" rows="7" cols="67%">1.  鉴定意见属于专家专业性意见，其是否被采信取决于办案机关的审查和判断，鉴定人和鉴定机关无权干涉；
2.  由于鉴定材料或者客观条件限制，并非所有鉴定都能得出明确的鉴定意见；
3.  鉴定活动遵循独立、客观、公正的原则，因此，鉴定意见可能对委托人有利，也可能不利。 
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
									<input type="text" name="wts[qzyear]" value="" />年
									<input type="text" name="wts[qzmonth]" value="" />月
									<input type="text" name="wts[qzday]" value="" />日
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
									<input type="text" name="wts[qz1year]" value="" />年
									<input type="text" name="wts[qz1month]" value="" />月
									<input type="text" name="wts[qz1day]" value="" />日
								</td>
							</tr>
						</table>
					</td>
				</tr>
				<tr>
					<td colspan="2">
						备注
						&nbsp;&nbsp;1.此委托书签订之日即为受理之日<br />
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.本委托书一式两份，其中一份委托人保存，一份司法鉴定中心存档
					</td>
				</tr>
			</table>
		</div>
		<p>说明：1.涉及选择项目的，确定后需将√</p>
		<table class="tit">
			<tr height="30"></tr>
			<tr>
				<td colspan="3" align="center" id="button">
					<input type="submit" value="保&nbsp;存" />&nbsp;&nbsp;&nbsp;&nbsp;
					<a href='<?php echo U("Printer/weituos",array("id"=>"$id"));?>' target="_blank">
					<input type="button" value="打&nbsp;印" />
					</a>
				</td>
			</tr>
			<tr height="20"></tr>
	  	</table>
	</form>
  </div>
  <div id="回避认定书">
  	<form action="<?php echo U('Jbxx/index',array('id'=>'huibis'));?>" method="post">
  		<table class="tit">
			<tr>
				<td align="center"><font size='6'><?php echo session('dp'); ?></font></td>
			</tr>
			<tr>
				<td align="center"><font size='6'>司法医学鉴定人是否回避认定书</font></td>
			</tr>
		</table>
		<table class="ttitle">
			<tr>
				<td align="right">
					<font size="3"><?php echo ($dp[0][titzi]); ?>司鉴办字[20<input type="text" name="hbs[zihao]" value="" />第（<?php echo ($dp[0][bhao]); ?>）<input type="text" name="hbs[zihao1]" value="" />号]</font>
				</td>
			</tr>
		</table>
		<table class="ttitle1">
			<tr>
				<td>
					根据《河北省司法鉴定管理条例》第十六条规定，被鉴定人<input type="text" name="hbs[name]" value="" /><br /><br />对以下鉴定专家是否要求回避的认定如下：
				</td>
			</tr>
		</table>
		<table class="hbscon">
			<tr class="contit">
				<td width="12%">专家姓名</td>
				<td width="27%">专家工作单位</td>
				<td width="15%">专业</td>
				<td width="15%">是否回避</td>
				<td width="31%">要求回避理由</td>
			</tr>
			<?php if(is_array($zj)): $i = 0; $__LIST__ = $zj;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
					<td align="left"><input type="text" class="zjname" name="hbs[zjname<?php echo ($vo["id"]); ?>]" value="<?php echo ($vo["zjname"]); ?>"/></td>
					<td><?php echo ($vo["dp_name"]); ?></td>
					<td><?php echo ($vo["zhuanye"]); ?></td>
					<td>
						<label><input type="radio" class="sfhb1" name="hbs[sfhb<?php echo ($vo["id"]); ?>]" value="0" />是</label>
						<label><input type="radio" class="sfhb1" name="hbs[sfhb<?php echo ($vo["id"]); ?>]" value="1" checked="checked" />否</label>
					</td>
					<td><input type="text" class="hbly" name="hbs[hbly<?php echo ($vo["id"]); ?>]" value="" /></td>
				</tr><?php endforeach; endif; else: echo "" ;endif; ?>
		</table>
		<table class="hbsbottom">
			<tr height="50"></tr>
			<tr>
				<td>被鉴定人或委托人签字：<input type="text" name="hbs[qzname]" value="" /></td>
			</tr>
			<tr>
				<td>
					<input type="text" name="hbs[qzyear]" value="" />年
					<input type="text" name="hbs[qzmonth]" value="" />月
					<input type="text" name="hbs[qzday]" value="" />日
				</td>
			</tr>
		</table>
		<table class="tit">
			<tr height="30"></tr>
			<tr>
				<td colspan="3" align="center" id="button">
					<input type="submit" value="保&nbsp;存" />&nbsp;&nbsp;&nbsp;&nbsp;
					<a href='<?php echo U("Printer/huibis",array("id"=>"$id"));?>' target="_blank">
					<input type="button" value="打&nbsp;印" />
					</a>
				</td>
			</tr>
			<tr height="20"></tr>
	  	</table>
  	</form>
  </div>
  <div id="接谈笔录">
  	<form action="<?php echo U('Jbxx/index',array('id'=>'jietanbl'));?>" method="post">
  		<table class="tit">
			<tr>
				<td align="center"><font size='6'>司法鉴定中心接谈笔录</font></td>
			</tr>
			<tr height="35"></tr>
		</table>
		<table class="jtblcon">
			<tr>
				<td id="contit">鉴定机构：<?php echo session('dp'); ?></td>
			</tr>
			<tr>
				<td id="cons">
					时间：<input type="text" name="jtbl[date]" value="" />
					地点：<input type="text" name="jtbl[didian]" value="" />
					接谈人：<input type="text" name="jtbl[jtrname]" value="" />
					被接谈人：<input type="text" name="jtbl[bjtrname]" value="" />
				</td>
			</tr>
			<tr>
				<td id="cons">
					男（女）<input type="text" name="jtbl[sex]" value="" />
					出生：
					<input type="text" name="jtbl[csyear]" value="" />年
					<input type="text" name="jtbl[csmonth]" value="" />月
					<input type="text" name="jtbl[csday]" value="" />日
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					身份证地址：<input type="text" name="jtbl[idaddress]" value="" />
				</td>
			</tr>
			<tr>
				<td id="cons">
					身份证号：<input type="text" name="jtbl[idcard]" value="" />
					民族：<input type="text" name="jtbl[minzu]" value="" />
					联系电话：<input type="text" name="jtbl[lxphone]" value="" />
				</td>
			</tr>
			<tr>
				<td id="cons">
					申请鉴定事项：<input type="text" name="jtbl[jdsx]" value="" />
				</td>
			</tr>
			<tr>
				<td id="cons">
					与鉴定有关情况：<br/>
				</td>
			</tr>
		</table>
		<p></p>
		<div id="bldiv" contenteditable="true"></div>
		<input type="hidden" id="ygqk" name="jtbl[ygqk]" value=""/>
		<table class="tit">
			<tr height="30"></tr>
			<tr>
				<td colspan="3" align="center" id="button">
					<input type="submit" value="保&nbsp;存" />
					&nbsp;&nbsp;
					<a href='<?php echo U("Printer/jietanbl",array("id"=>"$id"));?>' target="_blank">
					<input type="button" value="打 印"/>
					</a>
				</td>
			</tr>
			<tr height="20"></tr>
	  	</table>
  	</form>
  </div>
  <div id="鉴定完毕" style="height:340px;">
  	<form action="/sifa(4)/index.php?s=/Home/Jbxx/upload" enctype="multipart/form-data" method="post">
  	<h3>请查阅填写信息，保证准确！</h3>
  	<h4>上传被鉴定人的相关图片&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="upload" style="background:#FFF; border:none; outline:none; width:300px; color:#000;"/></h4>
	<input type="submit" value="上传" /><br/><br/>
	<a href='<?php echo U("Printer/yijianshu",array("id"=>"$id"));?>' target="_BlANK"><input type="button" name="baogao" value="生成鉴定意见书" /></a><br /><br />
	<a href="<?php echo U('Jbxx/jbxx');?>" target="_parent"><input type="button" value="新增鉴定" /></a>
  	</form>
  </div>
</div>
<br />
<br />
<script type="text/javascript" src="/sifa(4)/Public/Js/jquery-1.6.3.min.js"></script>
<script type="text/javascript" src="/sifa(4)/Public/Js/jquery-2.1.3.min.js"></script>
<script>
$(document).ready(function() {
	$("#content > div").hide(); // 最初隐藏所有内容
	$("#tabs li:first").attr("id","current"); // 激活第一个选项卡
	$("#content div:first").fadeIn(); // 显示第一个选项卡的内容
    
    $('#tabs a').click(function(e) {
        e.preventDefault();        
        $("#content > div").hide(); //隐藏所有内容
        $("#tabs li").attr("id",""); //Reset id's
        $(this).parent().attr("id","current"); // Activate this
        $('#' + $(this).attr('title')).fadeIn(); // Show content for current tab
    });
})();
</script>
</body>
</html>