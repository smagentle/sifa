<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link type="text/css" rel="stylesheet" href="/sifa(4)/Public/Css/lanrenzhijia.css" />
<!-- <script type="text/javascript" src="/sifa(4)/Public/Js/lhgcore.js"></script>
<script type="text/javascript" src="/sifa(4)/Public/Js/lhgcalendar.js"></script>
<script type="text/javascript" src="/sifa(4)/Public/Js/checkIdcard.js"></script> -->
<title>司法鉴定</title>
</head>

<body>
<ul id="tabs">
  <li><a id="tab" href="#" title="申请书">第1步&nbsp;&nbsp;申请书</a></li>
  <li><a id="tab0"href="#" title="决定书">第2步&nbsp;&nbsp;决定书</a></li>
  <li><a id="tab1" href="#" title="委托书">第3步&nbsp;&nbsp;委托书</a></li>
  <li><a id="tab2" href="#" title="回避认定书">第4步&nbsp;&nbsp;回避认定书</a></li>
  <li><a id="tab3" href="#" title="接谈笔录">第5步&nbsp;&nbsp;接谈笔录</a></li>
  <li><a id="tab4" href="#" title="鉴定完毕">第6步&nbsp;&nbsp;鉴定完毕</a></li>
</ul>
<div id="content">
  <div id="申请书">
  	<!-- <form action="<?php echo U('Jbxx/index',array('id'=>'shenqs'));?>" method="post"> -->
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
				申请人<input type="text" name="sqs[name]" value="<?php echo ($sqs[0][name]); ?>"/>,
				性别<input type="text" name="sqs[sex]" value="<?php echo ($sqs[0][sex]); ?>" />,
				<input type="text" name="sqs[year]" value="<?php echo ($sqs[0][year]); ?>" />年
				<input type="text" name="sqs[month]" value="<?php echo ($sqs[0][month]); ?>" />月
				<input type="text" name="sqs[day]" value="<?php echo ($sqs[0][day]); ?>" />日出生，
			</td>
		</tr>
		<tr class="hei"></tr>
		<tr>
			<td>
				系<input type="text" name="sqs[sheng]" value="<?php echo ($sqs[0][sheng]); ?>" />省
				<input type="text" name="sqs[shi]" value="<?php echo ($sqs[0][shi]); ?>" />市
				<input type="text" name="sqs[xian]" value="<?php echo ($sqs[0][xian]); ?>" />县（区）
				<input type="text" name="sqs[address]" maxlength="15" value="<?php echo ($sqs[0][address]); ?>" />人。
			</td>
		</tr>
		<tr class="hei"></tr>
		<tr>
			<td>
				身份证号：<input type="text" id="card" name="sqs[idcard]" maxlength="18" value="<?php echo ($sqs[0][idcard]); ?>" />
			</td>
		</tr>
		<tr class="hei"></tr>
		<tr>
			<td>
				因<input type="text" name="sqs[sgyear]" value="<?php echo ($sqs[0][sgyear]); ?>" />年
				<input type="text" name="sqs[sgmonth]" value="<?php echo ($sqs[0][sgmonth]); ?>" />月
				<input type="text" name="sqs[sgday]" value="<?php echo ($sqs[0][sgday]); ?>" />日
				<input type="text" name="sqs[sghour]" value="<?php echo ($sqs[0][sghour]); ?>" />时
				<input type="text" name="sqs[sgsec]" value="<?php echo ($sqs[0][sgsec]); ?>" />分,
				在<input type="text" name="sqs[sgaddress]" maxlength="15" value="<?php echo ($sqs[0][sgaddress]); ?>"/>
			</td>
		</tr>
		<tr class="hei"></tr>
		<tr>
			<td>
				<input type="text" name="sqs[sgaddress1]" maxlength="13" value="<?php echo ($sqs[0][sgaddress1]); ?>"/>地点，被（他人用）
				<input type="text" name="sqs[gjssbw]" maxlength="16" value="<?php echo ($sqs[0][gjssbw]); ?>"/>
			</td>
		</tr>
		<tr class="hei"></tr>
		<tr>
			<td>
				<input type ="text" name="sqs[gjssbw1]" maxlength="25" value="<?php echo ($sqs[0][gjssbw1]); ?>" />部位受伤，出现
				<input type ="text" name="sqs[zhengz]"  maxlength="6" value="<?php echo ($sqs[0][zhengz]); ?>" />
			</td>
		</tr>
		<tr class="hei"></tr>
		<tr>
			<td>
				<input type ="text" name="sqs[zhengz1]" maxlength="18" value="<?php echo ($sqs[0][zhengz1]); ?>" />症状。
				当时于<input type ="text" name="sqs[yiyuan]" maxlength="12" value="<?php echo ($sqs[0][yiyuan]); ?>" />医院住
			</td>
		</tr>
		<tr class="hei"></tr>
		<tr>
			<td>
				院（门诊）治疗，诊断为：<input type="text" name="sqs[zhenduan]" maxlength="27" value="<?php echo ($sqs[0][zhenduan]); ?>" />；
			</td>
		</tr>
		<tr class="hei"></tr>
		<tr>
			<td>
				后于<input type="text" name="sqs[zyyear]" value="<?php echo ($sqs[0][zyyear]); ?>" />年
				<input type="text" name="sqs[zymonth]" value="<?php echo ($sqs[0][zymonth]); ?>" />月
				<input type="text" name="sqs[zyday]" value="<?php echo ($sqs[0][zyday]); ?>" />日在
				<input type="text" name="sqs[zyyiyuan]" maxlength="11" value="<?php echo ($sqs[0][zyyiyuan]); ?>" />医院住院（门诊）治疗，诊
			</td>
		</tr>
		<tr class="hei"></tr>
		<tr>
			<td>
				断为<input type="text" name="sqs[zyzhenduan]" maxlength="21" value="<?php echo ($sqs[0][zyzhenduan]); ?>" />
				&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="sqs[zy1year]" value="<?php echo ($sqs[0][zy1year]); ?>" />年
				<input type="text" name="sqs[zy1month]" value="<?php echo ($sqs[0][zy1month]); ?>" />月
				<input type="text" name="sqs[zy1day]" value="<?php echo ($sqs[0][zy1day]); ?>" />日转
			</td>
		</tr>
		<tr class="hei"></tr>
		<tr>
			<td>
				入<input type="text" name="sqs[zy1yiyuan]" maxlength="10" value="<?php echo ($sqs[0][zy1yiyuan]); ?>" />医院住院（门诊）治疗。诊断
				<input type="text" name="sqs[zy1zhenduan]" maxlength="15" value="<?php echo ($sqs[0][zy1zhenduan]); ?>" />。
			</td>
		</tr>
		<tr class="hei"></tr>
		<tr>
			<td>
				特此申请：
				<?php if(is_array($buwei)): $i = 0; $__LIST__ = $buwei;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; $sq = D('shenqing'); $res = $sq -> field('buwei') -> where("id = '$_SESSION[id]'") -> select(); if($i == $res[0][buwei]){ echo "$vo[name](&nbsp;<b>√</b>&nbsp;)"; $i + 1; }else{ echo "$vo[name](&nbsp;&nbsp;&nbsp;)"; $i + 1; } endforeach; endif; else: echo "" ;endif; ?>
			</td>
		</tr>
		<tr class="hei"></tr>
		<tr>
			<td>
				鉴定类别：
				<?php if(is_array($leibie)): $i = 0; $__LIST__ = $leibie;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; $sq = D('shenqing'); $res = $sq -> field('leibie') -> where("id = '$_SESSION[id]'") -> select(); if($i == $res[0][leibie]){ echo "$vo[name](&nbsp;<b>√</b>&nbsp;)&nbsp;&nbsp;"; $i + 1; }else{ echo "$vo[name](&nbsp;&nbsp;&nbsp;)&nbsp;&nbsp;"; $i + 1; } if($i == 3){ echo "<br /><br />
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
							&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"; } endforeach; endif; else: echo "" ;endif; ?>
			</td>
		</tr>
		<tr class="hei"></tr>
		<tr>
			<td>
				伤残鉴定分类：
				<?php if(is_array($fenlei)): $i = 0; $__LIST__ = $fenlei;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; $sq = D('shenqing'); $res = $sq -> field('fenlei') -> where("id = '$_SESSION[id]'") -> select(); if($i == $res[0][fenlei]){ echo "$vo[name](&nbsp;<b>√</b>&nbsp;)"; $i + 1; }else{ echo "$vo[name](&nbsp;&nbsp;)"; $i + 1; } endforeach; endif; else: echo "" ;endif; ?>
			</td>
		</tr>
		<tr class="hei"></tr>
		<tr>
			<td>
				其他鉴定：<br />
				<textarea cols="65" rows="2" name="sqs[qtjd]"><?php echo ($sqs[0][qtjd]); ?></textarea>
			</td>
		</tr>
		<tr class="hei"></tr>
		<tr>
			<td class="qianzi">
				申&nbsp;&nbsp;请&nbsp;&nbsp;人：<input type="text" name="sqs[shenqr]" value="<?php echo ($sqs[0][shenqr]); ?>" />(签字)<br /><br />
				联系电话：<input type="text" name="sqs[phone]" value="<?php echo ($sqs[0][phone]); ?>" /><br /><br />
				代&nbsp;&nbsp;理&nbsp;&nbsp;人：<input type="text" name="sqs[dailiren]" value="<?php echo ($sqs[0][dailiren]); ?>" />(签字)
				关系：<input type="text" name="sqs[guanxi]" value="<?php echo ($sqs[0][guanxi]); ?>" />
				<br /><br />&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
				<input type="text" name="sqs[sqyear]" value="<?php echo ($sqs[0][sqyear]); ?>" />年
				<input type="text" name="sqs[sqmonth]" value="<?php echo ($sqs[0][sqmonth]); ?>" />月
				<input type="text" name="sqs[sqday]" value="<?php echo ($sqs[0][sqday]); ?>" />日
			</td>
		</tr>
		<tr class="hei_b"></tr>
	</table>
	<table class="but">
		<tr>
			<td colspan="3" align="center" id="button">
				<a href='<?php echo U("Printer/shenqing",array("id"=>"$id"));?>' target="_blank"><input type="button" value="打&nbsp;印"/></a>
			</td>
		</tr>
	</table>
	<!-- </form> -->
  </div>
  <script>
  	function vcode(){
  		$v1 = document.getElementById("vcode1");
  		$v2 = document.getElementById("vcode2");
  		$v5 = document.getElementById("vcode5");
  		$v2.value = $v1.value;
  		$v5.value = $v2.value;
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
                <td align="right"><font size="3">邢司鉴办字[20<input type="text" name="jds[zi]" value="<?php echo ($jds[0][zi]); ?>"> 第（<input type="text" name="jds[di]" style="width:25px;" value="<?php echo ($jds[0][di]); ?>">）<input type="text" name="jds[hao]" value="<?php echo ($jds[0][hao]); ?>">号]</font></td>
            </tr>
        </table>
        <table>
            <tr>
                <td align="left">
                    <input type="text" name="jds[sqname]" style="border-bottom:1px solid #333;width:150px;" value="<?php echo ($jds[0][sqname]); ?>">（申请人或委托机构：）
                </td>
            </tr>
            <tr>
                <td>
                    &nbsp;&nbsp;&nbsp;&nbsp;由<input type="text" name="jds[you]" style="border-bottom:1px solid #333;width:180px;" value="<?php echo ($jds[0][you]); ?>">委托，关于<input type="text" name="jds[gy]" style="border-bottom:1px solid #333;width:150px;" value="<?php echo ($jds[0][gy]); ?>">的司法医学鉴定委托书及材料，经<input type="text" name="jds[year]" style="border-bottom:1px solid #000000;width:70px;" value="<?php echo ($jds[0][year]); ?>">年
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" name="jds[mouth]" style="border-bottom:1px solid #000000;" value="<?php echo ($jds[0][mouth]); ?>">月<input type="text" name="jds[day]" style="border-bottom:1px solid #000000;" value="<?php echo ($jds[0][day]); ?>">日，由河北省眼科司法医学鉴定中心审核，根据中华人民共和国司法部令第132号《司法鉴定程
                </td>
            </tr>
            <tr>
                <td>
                    序通则》第十一条、第十二条、第十六条，决定予以受理进行<input type="text" name="jds[bw]" style="border-bottom:1px solid #000000;width:50px;" value="<?php
 if($sqs[0][buwei]==1){ echo "眼部"; }else if($sqs[0][buwei]==2){ echo "面部"; }else if($sqs[0][buwei]==3){ echo "耳鼻喉"; }else{ echo "口腔"; } ?>">部位，<input type="text" name="jds[ssjd]" style="border-bottom:1px solid #000000;width:120px;" value="<?php
 if($sqs[0][fenlei]==1){ echo "交通事故"; }else if($sqs[0][fenlei]==2){ echo "工伤"; }else if($sqs[0][fenlei]==3){ echo "人身损害"; }else if($sqs[0][fenlei]==4){ echo "人身保险"; }else{ echo "康宁保险"; } ?>">损伤程度鉴定。
                </td>
            </tr>
        </table><br/>
        <table>
            <tr>
                <td align="right"><?php echo session('dp'); ?></td>
            </tr>
            <tr>
                <td align="right"><input type="text" name="jds[y]" style="width:60px;" value="<?php echo ($jds[0][y]); ?>">年<input type="text" name="jds[m]" value="<?php echo ($jds[0][m]); ?>">月<input type="text" name="jds[d]" value="<?php echo ($jds[0][d]); ?>">日</td>
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
            4、请被鉴定人于<input type="text" name="jds[dm]" style="border-bottom:1px solid #000000;" value="<?php echo ($jds[0][dm]); ?>"> 月<input type="text" name="jds[dd]" style="border-bottom:1px solid #000000;" value="<?php echo ($jds[0][dd]); ?>"> 日，到我中心进行鉴定。<br/>
        </font><br/><br/>
        <center><a href='<?php echo U("Printer/juedings",array("id"=>"$id"));?>' target="_blank"><input type="button" value="打&nbsp;印" style="background:#0099FF; color:#FFFFFF;width:120px;height:30px;font-weight:bold;"/></a></center>
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
					<td colspan="3"><?php echo ($a1[0][name]); echo ($b1[0][name]); ?></td>
				</tr>
				<tr>
					<td id="gdwidth" align="center">委托鉴定要求</td>
					<td colspan="3">由<input type="text" name="wts[wtrname1]" id="vcode2" value="<?php echo ($wts[0][wtrname1]); ?>" />委托我中心要求为<?php echo ($sqs[0][name]); ?>进行<?php echo ($a1[0][name]); echo ($b1[0][name]); ?></td>
				</tr>
				<tr>
					<td id="gdwidth" align="center">是否属于重新鉴&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;定</td>
					<td colspan="3">
						<?php
 $jd = D('weituos'); $res = $jd -> field('cxjd') -> where("bianhao = '$id'") -> select(); if($res[0][cxjd] == 0){ echo "是"; }else{ echo "否"; } ?>
					</td>
				</tr>
				<tr height="80">
					<td id="gdwidth" align="center">检案摘要</td>
					<td colspan="3"><?php echo ($sqs[0][sgyear]); ?>年<?php echo ($sqs[0][sgmonth]); ?>月<?php echo ($sqs[0][sgday]); ?>日<?php echo ($sqs[0][sghour]); ?>时，在<?php echo ($sqs[0][sgaddress]); echo ($sqs[0][sgaddress1]); ?>，被他人用<?php echo ($sqs[0][gjssbw]); ?>击伤<?php echo ($sqs[0][gjssbw1]); ?>，当时<?php echo ($sqs[0][zhengz]); echo ($sqs[0][zhengz1]); ?>，于<?php echo ($sqs[0][yiyuan]); ?>医院住院治疗。</td>
				</tr>
				<tr height="200">
					<td id="gdwidth1" align="center">鉴定材料<br />目录和数量</td>
					<td colspan="3">
						<textarea name="wts[jdcl]" rows="5" cols="67%" onmousedown="s(event,this)"><?php echo ($wts[0][jdcl]); ?></textarea>
					</td>
				</tr>
				<tr height="200">
					<td id="gdwidth2" rowspan="2" align="center">鉴定费用<br />及<br />收取方式</td>
					<td colspan="3">
						<textarea name="wts[jdfy]" rows="5" cols="67%" onmousedown="s(event,this)"><?php echo ($wts[0][jdfy]); ?></textarea>
					</td>
				</tr>
				<tr id="feiyong">
					<td colspan="3" id="feiyong">共预计收费总计<input type="text" name="wts[jdfy1]" value="<?php echo ($wts[0][jdfy1]); ?>" />元</td>
				</tr>
				<tr>
					<td align="center">鉴定文书<br/><br/>发送方式</td>
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
									<input type="text" name="wts[qzday]" value="<?php echo ($wts[0][qzday]); ?>" />日
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
									<input type="text" name="wts[qz1day]" value="<?php echo ($wts[0][qz1day]); ?>" />日
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
					<a href='<?php echo U("Printer/weituos",array("id"=>"$id"));?>' target="_blank"><input type="button" value="打&nbsp;印" /></a>
				</td>
			</tr>
			<tr height="20"></tr>
	  	</table>
	</form>
  </div>
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
					<font size="3">邢司鉴办字[20<input type="text" name="hbs[zihao]" value="<?php echo ($hbs[0][zihao]); ?>" />第（05）<input type="text" name="hbs[zihao1]" value="<?php echo ($hbs[0][zihao1]); ?>" />号]</font>
				</td>
			</tr>
		</table>
		<table class="ttitle1">
			<tr>
				<td>
					根据《河北省司法鉴定管理条例》第十六条规定，被鉴定人<input type="text" name="hbs[name]" value="<?php echo ($sqs[0][name]); ?>" /><br /><br />对以下鉴定专家是否要求回避的认定如下：
				</td>
			</tr>
		</table>
		<table class="hbscon">
			<tr class="contit">
				<td width="12%">专家姓名</td>
				<td width="30%">专家工作单位</td>
				<td width="15%">专业</td>
				<td width="12%">是否回避</td>
				<td width="31%">要求回避理由</td>
			</tr>
			<?php if(is_array($zj)): $i = 0; $__LIST__ = $zj;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><tr>
					<td align="left"><input type="text" class="zjname" name="hbs[zjname<?php echo ($vo["id"]); ?>]" value="<?php echo ($vo["zjname"]); ?>"/></td>
					<td><?php echo ($vo["dp_name"]); ?></td>
					<td><?php echo ($vo["zhuanye"]); ?></td>
					<td>
						<?php
 $hbs = D('huibis'); $a = 'sfhb'.$vo[id]; $res = $hbs -> where("id = '$_SESSION[id]'") -> select(); if($res[0][$a] == 0){ ?>
								<input type="text" class="sfhb" name="hbs[sfhb<?php echo ($vo["id"]); ?>]" value="是" />
						<?php
 }else{ ?>
								<input type="text" class="sfhb" name="hbs[sfhb<?php echo ($vo["id"]); ?>]" value="否" />
						<?php
 } ?>
					</td>
					<td>
						<?php
 $i + 1; $hbs = D('huibis'); $b = 'hbly'.$i; $res = $hbs -> where("id = '$_SESSION[id]'") -> select(); if($res[0][$b] == ''){ ?>
								<input type="text" class="hbly" name="hbs[hbly<?php echo ($vo["id"]); ?>]" value="" />
						<?php
 }else{ ?>
								<input type="text" class="hbly" name="hbs[hbly<?php echo ($vo["id"]); ?>]" value="<?php echo ($res[0][$b]); ?>" />
						<?php
 } ?>
					</td>
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
					<a href='<?php echo U("Printer/huibis",array("id"=>"$id"));?>' target="_blank"><input type="button" value="打&nbsp;印" /></a>
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
					时间：<input type="text" name="jtbl[date]" value="<?php echo date('Y-m-d');?>" />
					地点：<input type="text" name="jtbl[address]" value="<?php echo ($jtbl[0][address]); ?>" />
					接谈人：<input type="text" name="jtbl[jtrname]" value="<?php echo ($jtbl[0][jtrname]); ?>" />
					被接谈人：<input type="text" name="jtbl[bjtrname]" value="<?php echo ($sqs[0][name]); ?>" />
				</td>
			</tr>
			<tr>
				<td id="cons">
					男（女）<input type="text" name="jtbl[sex]" value="<?php echo ($sqs[0][sex]); ?>" />
					出生：
					<input type="text" name="jtbl[csyear]" value="<?php echo ($sqs[0][year]); ?>" />年
					<input type="text" name="jtbl[csmonth]" value="<?php echo ($sqs[0][month]); ?>" />月
					<input type="text" name="jtbl[csday]" value="<?php echo ($sqs[0][day]); ?>" />日
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
					身份证地址：<input type="text" name="jtbl[idaddress]" value="<?php echo ($sqs[0][sheng]); ?>省<?php echo ($sqs[0][shi]); ?>市<?php echo ($sqs[0][xian]); echo ($sqs[0][address]); ?>" />
				</td>
			</tr>
			<tr>
				<td id="cons">
					身份证号：<input type="text" name="jtbl[idcard]" value="<?php echo ($sqs[0][idcard]); ?>" />
					民族：<input type="text" name="jtbl[minzu]" value="<?php echo ($jtbl[0][minzu]); ?>" />
					联系电话：<input type="text" name="jtbl[lxphone]" value="<?php echo ($jtbl[0][lxphone]); ?>" />
				</td>
			</tr>
			<tr>
				<td id="cons">
					申请鉴定事项：<input type="text" name="jtbl[jdsx]" value="<?php echo ($a1[0][name]); echo ($b1[0][name]); ?>" />
				</td>
			</tr>
			<tr>
				<td id="cons">
					与鉴定有关情况：<input type="text" name="jtbl[ygqk]" value="<?php echo ($jtbl[0][ygqk]); ?>" />
				</td>
			</tr>
			<tr>
				<td id="cons">
					<input type="text" name="jtbl[ygqk1]" value="<?php echo ($jtbl[0][ygqk1]); ?>" />
				</td>
			</tr>
			<tr>
				<td id="cons">
					<input type="text" name="jtbl[ygqk2]" value="<?php echo ($jtbl[0][ygqk2]); ?>" />
				</td>
			</tr>
			<tr>
				<td id="cons">
					<input type="text" name="jtbl[ygqk3]" value="<?php echo ($jtbl[0][ygqk3]); ?>" />
				</td>
			</tr>
			<tr>
				<td id="cons">
					<input type="text" name="jtbl[ygqk4]" value="<?php echo ($jtbl[0][ygqk4]); ?>" />
				</td>
			</tr>
			<tr>
				<td id="cons">
					<input type="text" name="jtbl[ygqk5]" value="<?php echo ($jtbl[0][ygqk5]); ?>" />
				</td>
			</tr>
			<tr>
				<td id="cons">
					<input type="text" name="jtbl[ygqk6]" value="<?php echo ($jtbl[0][ygqk6]); ?>" />
				</td>
			</tr>
			<tr>
				<td id="cons">
					<input type="text" name="jtbl[ygqk7]" value="<?php echo ($jtbl[0][ygqk7]); ?>" />
				</td>
			</tr>
			<tr>
				<td id="cons">
					<input type="text" name="jtbl[ygqk8]" value="<?php echo ($jtbl[0][ygqk8]); ?>" />
				</td>
			</tr>
			<tr>
				<td id="cons">
					<input type="text" name="jtbl[ygqk9]" value="<?php echo ($jtbl[0][ygqk9]); ?>" />
				</td>
			</tr>
			<tr>
				<td id="cons">
					<input type="text" name="jtbl[ygqk10]" value="<?php echo ($jtbl[0][ygqk10]); ?>" />
				</td>
			</tr>
			<tr>
				<td id="cons">
					<input type="text" name="jtbl[ygqk11]" value="<?php echo ($jtbl[0][ygqk11]); ?>" />
				</td>
			</tr>
			<tr>
				<td id="cons">
					<input type="text" name="jtbl[ygqk12]" value="<?php echo ($jtbl[0][ygqk12]); ?>" />
				</td>
			</tr>
			<tr>
				<td id="cons">
					<input type="text" name="jtbl[ygqk13]" value="<?php echo ($jtbl[0][ygqk13]); ?>" />
				</td>
			</tr>
			<tr>
				<td id="cons">
					<input type="text" name="jtbl[ygqk14]" value="<?php echo ($jtbl[0][ygqk14]); ?>" />
				</td>
			</tr>
			<tr>
				<td id="cons">
					<input type="text" name="jtbl[ygqk15]" value="<?php echo ($jtbl[0][ygqk15]); ?>" />
				</td>
			</tr>
			<tr>
				<td id="cons">
					<input type="text" name="jtbl[ygqk16]" value="<?php echo ($jtbl[0][ygqk16]); ?>" />
				</td>
			</tr>
			<tr>
				<td id="cons">
					<input type="text" name="jtbl[ygqk17]" value="<?php echo ($jtbl[0][ygqk17]); ?>" />
				</td>
			</tr>
			<tr>
				<td id="cons">
					<input type="text" name="jtbl[ygqk18]" value="<?php echo ($jtbl[0][ygqk18]); ?>" />
				</td>
			</tr>
			<tr>
				<td id="cons">
					<input type="text" name="jtbl[ygqk19]" value="<?php echo ($jtbl[0][ygqk19]); ?>" />
				</td>
			</tr>
			<tr>
				<td id="cons">
					<input type="text" name="jtbl[ygqk20]" value="<?php echo ($jtbl[0][ygqk20]); ?>" />
				</td>
			</tr>
			<tr>
				<td id="cons">
					<input type="text" name="jtbl[ygqk21]" value="<?php echo ($jtbl[0][ygqk21]); ?>" />
				</td>
			</tr>
			<tr>
				<td id="cons">
					<input type="text" name="jtbl[ygqk22]" value="<?php echo ($jtbl[0][ygqk22]); ?>" />
				</td>
			</tr>
			<tr>
				<td id="cons">
					<input type="text" name="jtbl[ygqk23]" value="<?php echo ($jtbl[0][ygqk23]); ?>" />
				</td>
			</tr>
			<tr>
				<td id="cons">
					<input type="text" name="jtbl[ygqk24]" value="<?php echo ($jtbl[0][ygqk24]); ?>" />
				</td>
			</tr>
			<tr>
				<td id="cons">
					<input type="text" name="jtbl[ygqk25]" value="<?php echo ($jtbl[0][ygqk25]); ?>" />
				</td>
			</tr>
			<tr>
				<td id="cons">
					<input type="text" name="jtbl[ygqk26]" value="<?php echo ($jtbl[0][ygqk26]); ?>" />
				</td>
			</tr>
			<tr>
				<td id="cons">
					<input type="text" name="jtbl[ygqk27]" value="<?php echo ($jtbl[0][ygqk27]); ?>" />
				</td>
			</tr>
			<tr>
				<td id="cons">
					<input type="text" name="jtbl[ygqk28]" value="<?php echo ($jtbl[0][ygqk28]); ?>" />
				</td>
			</tr>
			<tr>
				<td id="cons">
					<input type="text" name="jtbl[ygqk29]" value="<?php echo ($jtbl[0][ygqk29]); ?>" />
				</td>
			</tr>
			<tr>
				<td id="conbottom">
					<input type="text" name="jtbl[ygqk30]" value="<?php echo ($jtbl[0][ygqk30]); ?>" />
				</td>
			</tr>
		</table>
		<table class="tit">
			<tr height="30"></tr>
			<tr>
				<td colspan="3" align="center" id="button">
					<a href='<?php echo U("Printer/jietanbl",array("id"=>"$id"));?>' target="_blank"><input type="button" value="打&nbsp;印" /></a>
				</td>
			</tr>
			<tr height="20"></tr>
	  	</table>
  	</form>
  </div>
  <div id="鉴定意见书" style="height:340px;">
  	<div class="con_t">
			<table class="jbqk">
				<tr>
					<td class="space"></td>
					<td class="space"></td>
					<td align="center">冀眼法医鉴中心[20<?php echo ($jieguo[0][ljz]); ?>]临检字第<?php echo ($jieguo[0][ljh]); ?>号</td>
				</tr>
				<tr>
					<td class="space1"></td>
					<td class="space1"></td>
					<td align="center"><font size="-2">（此处未加盖钢印无效）</font></td>
				</tr>
			</table>
			<table class="jbqk1">
				<tr>
					<td colspan="2"><h3>一、基本情况</h3></td>
					<td rowspan="4"><img src="<?php echo ($path); ?>" /></td>
				</tr>
				<tr>
					<td width="110px;"><h3>委 托 方:</h3></td>
					<td><?php echo ($wts[0][wtrname]); ?></td>
				</tr>
				<tr>
					<td><h3>委托事项：</h3></td>
					<td><?php echo ($jtbl[0][jdsx]); ?></td>
				</tr>
				<tr>
					<td><h3>受理日期：</h3></td>
					<td><?php echo substr($wts[0][wtdate],0,4)?>年<?php echo substr($wts[0][wtdate],5,2)?>月<?php echo substr($wts[0][wtdate],8,2)?>日</td>
				</tr>
				<tr>
					<td style=" vertical-align:top;"><h3 style="margin-top:5%;">鉴定材料：</h3></td>
					<td colspan="2"><font style="line-height:2em; letter-spacing:1px;"><?php $jdcl = str_replace("\n", '</li><li>', $wts[0][jdcl]); $jdcl = "<ul><li>".$jdcl."</li></ul>"; echo $jdcl; ?></font></td>
				</tr>
				<tr>
					<td><h3>鉴定日期：</h3></td>
					<td colspan="2"><?php echo substr($jtbl[0][date],0,4)?>年<?php echo substr($jtbl[0][date],5,2)?>月<?php echo substr($jtbl[0][date],8,2)?>日</td>
				</tr>
				<tr>
					<td><h3>鉴定地点：</h3></td>
					<td colspan="2"><?php echo session('dp');?></td>
				</tr>
				<tr>
					<td style=" vertical-align:top;"><h3 style="margin-top:5%;">被鉴定人：</h3></td>
					<td colspan="2"><font style="line-height:2em; letter-spacing:1px;"><?php echo ($jtbl[0][bjtrname]); ?>，<?php echo ($jtbl[0][sex]); ?>，<?php echo ($jtbl[0][csyear]); ?>年<?php echo ($jtbl[0][csmonth]); ?>月<?php echo ($jtbl[0][csday]); ?>日出生，<?php echo ($jtbl[0][idaddress]); ?>。身份证号：<?php echo ($jtbl[0][idcard]); ?></font></td>
				</tr>
			</table>
		</div>
		<div class="con_c">
			<table class="jazy">
				<tr>
					<td colspan="3">
						<h3>二、检案摘要</h3>
					</td>
				</tr>
				<tr>
					<td colspan="3">
						<p>
						<?php
 $arr = ""; $arr = $arr.$jtbl[0][ygqk]; $arr = $arr.$jtbl[0][ygqk1]; $arr = $arr.$jtbl[0][ygqk2]; $arr = $arr.$jtbl[0][ygqk3]; $arr = $arr.$jtbl[0][ygqk4]; $arr = $arr.$jtbl[0][ygqk5]; $arr = $arr.$jtbl[0][ygqk6]; $arr = $arr.$jtbl[0][ygqk7]; echo $arr; ?>
						</p>
						<p>
							根据中华人民共和国司法部令第132号《司法鉴定程序通则》第十一条，第十二条，第十六条，<?php echo substr($wts[0][wtdate],0,4)?>年<?php echo substr($wts[0][wtdate],5,2)?>月<?php echo substr($wts[0][wtdate],8,2)?>日由<?php echo ($wts[0][wtrname]); ?>委托我中心，要求为<?php echo ($jtbl[0][bjtrname]); ?>进行<?php echo ($jtbl[0][jdsx]); ?>。
						</p>
					</td>
				</tr>
				<tr>
					<td colspan="3">
						<h3>三、检验过程</h3>
					</td>
				</tr>
				<tr>
					<td colspan="3">
						<p>
							<?php
 if($jdbw == '眼部'){ echo "1.参照SF/ZJD0103003—2011《法医临床检验规范》、《视觉功能障碍法医鉴定指南》进行检查、鉴定。"; }else{ echo "1.参照SF/ZJD0103003—2011《法医临床检验规范》进行检查、鉴定。"; } ?>
						</p>
						<p>
							2.被鉴定人到场，神志清楚，查体合作。<?php echo ($jtbl[0][ygqk8]); echo ($jtbl[0][ygqk9]); echo ($jtbl[0][ygqk10]); echo ($jtbl[0][ygqk11]); echo ($jtbl[0][ygqk12]); ?>
						</p>
						<p>
							3.详阅<?php echo ($sqs[0][yiyuan]); ?>医院住院病历、<?php echo ($sqs[0][zyyiyuan]); ?>医院门诊病历、送检材料、客观检查报告单与现场检查结果相一致。
						</p>
					</td>
				</tr>
				<tr>
					<td colspan="3">
						<h3>四、分析说明</h3>
					</td>
				</tr>
				<tr>
					<td colspan="3">
						<p>
							1.根据被鉴定人病史、病历记载及现场检查，被鉴定人<?php echo ($sqs[0][gjssbw1]); echo ($jieguo[0][fxsm]); ?>损伤符合<?php echo ($jieguo[0][fxsm1]); ?>所致。
						</p>
						<p>
							2.根据<?php echo ($buwei); ?>情况：<?php echo substr($jtbl[0][ygqk8],12); echo ($jtbl[0][ygqk9]); echo ($jtbl[0][ygqk10]); echo ($jtbl[0][ygqk11]); echo ($jtbl[0][ygqk12]); ?>说明<?php echo ($sqs[0][gjssbw1]); echo ($jieguo[0][fxsm2]); ?>损伤是客观存在的。
						</p>
						<p>
							3.根据最高人民法院、最高人民检察院、公安部、国家安全部、司法部关于发布《人体损伤程度鉴定标准》的公告，第<?php echo ($jieguo[0][fxsm3]); ?>条第<?php echo ($jieguo[0][fxsm4]); ?>项，被鉴定人<?php echo ($sqs[0][gjssbw1]); ?>部损伤可定为<?php echo ($jieguo[0][fxsm5]); ?>。
						</p>
					</td>
				</tr>
				<tr>
					<td colspan="3">
						<h3>五、鉴定结论</h3>
					</td>
				</tr>
				<tr>
					<td colspan="3">
						<p>
							被鉴定人<?php echo ($sqs[0][name]); echo ($sqs[0][gjssbw1]); ?>损伤为<?php echo ($jieguo[0][fxsm6]); ?>。
						</p>
					</td>
				</tr>
				<tr>
					<td width="40%;"></td>
					<td colspan="2">
						&nbsp;主鉴定人&nbsp;：<?php echo ($jieguo[0][zjdr]); ?><br/><br/>
						《司法鉴定人执业证》证号：<?php echo ($jieguo[0][zjdrzh]); ?><br/><br/>
						&nbsp;鉴&nbsp;定&nbsp;人&nbsp;：<?php echo ($jieguo[0][jdr]); ?><br/><br/>
						《司法鉴定人执业证》证号：<?php echo ($jieguo[0][jdrzh]); ?><br/><br/>
						&nbsp;鉴&nbsp;定&nbsp;人&nbsp;：<?php echo ($jieguo[0][jdr1]); ?><br/><br/>
						《司法鉴定人执业证》证号：<?php echo ($jieguo[0][jdrzh1]); ?><br/><br/>
						&nbsp;审&nbsp;核&nbsp;人&nbsp;：<?php echo ($jieguo[0][shr]); ?><br/><br/>
						《司法鉴定人执业证》证号：<?php echo ($jieguo[0][shrzh]); ?><br/><br/>
					</td>
				</tr>
				<tr>
					<td width="40%;"></td>
					<td colspan="2">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo session('dp');?>
					</td>
				</tr>
				<tr>
					<td width="40%"></td>
					<td colspan="2">
						&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<?php echo ($jieguo[0][year]); ?>年<?php echo ($jieguo[0][month]); ?>月<?php echo ($jieguo[0][day]); ?>日
					</td>
				</tr>
			</table>
			<table class="tit">
			<tr height="30"></tr>
			<tr>
				<td colspan="3" align="center" id="button">
					<!--<input type="submit" value="保&nbsp;存" />&nbsp;&nbsp;&nbsp;&nbsp;-->
					<a href='<?php echo U("Printer/yijianshu1",array("id"=>"$id"));?>' target="_blank"><input type="button" value="打&nbsp;印" /></a>
				</td>
			</tr>
			<tr height="20"></tr>
	  	</table>
		</div>
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