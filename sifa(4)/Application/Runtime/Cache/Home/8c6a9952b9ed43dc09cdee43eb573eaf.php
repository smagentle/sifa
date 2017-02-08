<?php if (!defined('THINK_PATH')) exit();?><html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
        <title>鉴定意见书</title>
        <script>
        	document.oncontextmenu=new Function("event.returnValue=false;");
        </script>
        <style>
            *{
                padding:0px;margin:0px auto;
            }
            html,body{
            	background:#F4F4F4;
            }
            .contents{
            	width:75%;background:white;
            	box-shadow:0 0 8px 6px rgba(153, 153, 153, .7);
            }
			.con_t,.con,.con_f{width:90%;line-height:45px;}
			h3{font-family:黑体;}			
			.jbqk{ width:100%;font-size:16px;text-align:right;}
			.jbqk font{margin-right:10%;}
			.jbqk1{ width:100%;}
			.jazy{ width:100%; margin-top:2%; font-size:16px;}
			.jbqk td{ padding:10px;}
			.jbqk1 td{ padding:5px;}
			.jazy td{ padding:5px;}
			.space{ width:40px;}
			.space1{ width:120px;}
            p{text-indent:2em; line-height:2em; letter-spacing:1px;}
            /*img{ border:none; width:80px; height:112px;}
            ul{ list-style:none; }*/
            input{outline:none; border:none; font-size:16px; width:60px;}
            #ba{
            	width:120px;height:30px;text-align:center;
            	background:#8B8970;border-radius:5px;
            	font-weight:bold;cursor:pointer;line-height:30px;	
            }
            #ba a{
            	text-decoration:none;
            }
            #fxsmp{
            	text-indent:2em;line-height:2.5em;
            }
            #fxsmp div{
				line-height:2.5em;
            }
        </style>
    </head>
    <body>
<div style="display:none;">
    <?php
 class word{ function start(){ ob_start(); print'<html xmlns:o="urn:schemas-microsoft-com:office:office" 
			xmlns:w="urn:schemas-microsoft-com:office:word" 
			xmlns="http://www.w3.org/TR/REC-html40">'; } function save($path){ print "</html>"; $data = ob_get_contents(); ob_end_clean(); $this->wirtefile ($path,$data); } function wirtefile ($fn,$data){ $fp=fopen($fn,"wb"); fwrite($fp,$data); fclose($fp); } } $word = new word; $word->start(); ?>
	<br><br><br><br><br><br>
	<div style="width:100%;font-size:17.5px;font-family:仿宋_GB2312;line-height:3em;">
		<div style="line-height:2em;text-align:right;">
			冀眼法医鉴中心[20<?php echo ($jieguo[0][ljz]); ?>]临检字第<?php echo ($jieguo[0][ljh]); ?>号
			<br><font size="-1">（此处未加盖钢印无效）</font>&emsp;&emsp;&emsp;
		</div>
		<table border="0" cellspacing="0" cellpadding="0" style="width:100%;line-height:3em;font-size:17.5px;font-family:仿宋_GB2312;">
			<tr>
				<td style="width:55%;">
					<span style="font-family:黑体;font-size:19.5px;">一、基本情况</span>
					<br>
					<span style="font-family:黑体;font-size:19.5px;">委 托 方：</span>
					<?php echo ($jieguo[0][wtf]); ?><br>
					<span style="font-family:黑体;font-size:19.5px;">委托事项：</span>
					<?php echo ($jieguo[0][wtsx]); ?><br>
					<span style="font-family:黑体;font-size:19.5px;">受理日期：</span>
					<?php echo ($jieguo[0][slrq]); ?><br>
				</td>
				<td style="text-align:center;width:45%;">
					<img src="http://localhost/sifa(4)/<?php echo ($path); ?>" width="114px" height="151px">
				</td>
			</tr>
		</table>
		<div style="line-height:3em;">
			<span style="font-family:黑体;font-size:19.5px;">
				鉴定材料：</span><?php echo ($wts[0][jdcl]); ?><br>
			<span style="font-family:黑体;font-size:20px;">
				鉴定日期：</span><?php echo ($jieguo[0][jdrq]); ?><br>
			<span style="font-family:黑体;font-size:20px;">
				鉴定地点：</span><?php echo ($jieguo[0][jddd]); ?><br>
			<span style="font-family:黑体;font-size:20px;">
				被鉴定人：</span><?php echo ($jtbl[0][bjtrname]); ?>，<?php echo ($jtbl[0][sex]); ?>，<?php echo ($jtbl[0][csyear]); ?>年<?php echo ($jtbl[0][csmonth]); ?>月<?php echo ($jtbl[0][csday]); ?>日出生，<?php echo ($jtbl[0][idaddress]); ?>,<?php if(!empty($jtbl[0][idcard])){ echo "身份证号："; } echo ($jtbl[0][idcard]); ?><br>
			<span style="font-family:黑体;font-size:20px;">
			二、检案摘要	
			</span><br>
				<?php  $jazt=str_replace("Public","http://localhost/sifa(4)/Public",$jieguo[0][jazy]); $jazt=str_replace("&nbsp;&nbsp;","&emsp;&emsp;",$jazt); $jazy=strip_tags($jazt,'<br>'); echo $jazy; ?><br>
			<span style="font-family:黑体;font-size:20px;">
				三、检验过程
			</span><br>
				<?php
 $jygc1=strip_tags($jieguo[0][jygc1]); $jygc1=trim($jygc1); echo '&emsp;&emsp;'.$jygc1.'<br>'; $jygc2=strip_tags($jieguo[0][jygc2]); $jygc2=trim($jygc2); echo '&emsp;&emsp;'.$jygc2.'<br>'; $jygc3=strip_tags($jieguo[0][jygc3]); $jygc3=trim($jygc3); echo '&emsp;&emsp;'.$jygc3.'<br>'; ?> 
			<span style="font-family:黑体;font-size:20px;line-height:3em;">
				四、分析说明
			</span><br>
				&emsp;&emsp;1.根据被鉴定人病史、病历记载及现场检查，被鉴定人<?php echo ($sqs[0][gjssbw1]); echo ($jieguo[0][fxsm]); ?>损伤符合<?php echo ($jieguo[0][fxsm1]); ?>所致。
			<br>
				<?php
 $fxsm2=strip_tags($jieguo[0][fxsm2]); $fxsm2=trim($fxsm2); echo '&emsp;&emsp;'.$fxsm2; ?>
			<br>
				&emsp;&emsp;3.根据最高人民法院、最高人民检察院、公安部、国家安全部、司法部关于发布《人体损伤程度鉴定标准》的公告，第<?php echo ($jieguo[0][fxsm3]); ?>条第<?php echo ($jieguo[0][fxsm4]); ?>项，被鉴定人<?php echo ($sqs[0][gjssbw1]); ?>部损伤可定为<?php echo ($jieguo[0][fxsm5]); ?>。
			<br>
			<span style="font-family:黑体;font-size:20px;">
				五、鉴定结论
			</span><br>
				&emsp;&emsp;被鉴定人<?php echo ($sqs[0][name]); echo ($sqs[0][gjssbw1]); ?>损伤为<?php echo ($jieguo[0][fxsm6]); ?>。<br><br>
			<div style="width:60%;margin-left:180px;text-align:left;">
				&nbsp;主鉴定人：&nbsp;<?php echo ($jieguo[0][zjdr]); ?><br/>
				《司法鉴定人执业证》证号：<?php echo ($jieguo[0][zjdrzh]); ?><br/>
				&nbsp;鉴&nbsp;定&nbsp;人：&nbsp;<?php echo ($jieguo[0][jdr]); ?><br/>
				《司法鉴定人执业证》证号：<?php echo ($jieguo[0][jdrzh]); ?><br/>
				&nbsp;鉴&nbsp;定&nbsp;人：&nbsp;<?php echo ($jieguo[0][jdr1]); ?><br/>
				《司法鉴定人执业证》证号：<?php echo ($jieguo[0][jdrzh1]); ?><br/>
				&nbsp;审&nbsp;核&nbsp;人：&nbsp;<?php echo ($jieguo[0][shr]); ?><br/>
				《司法鉴定人执业证》证号：<?php echo ($jieguo[0][shrzh]); ?><br>
				<div style="width:100%;text-align:center;">
					<?php echo session('dp');?><br/>
					<?php echo ($jieguo[0][year]); ?>年<?php echo ($jieguo[0][month]); ?>月<?php echo ($jieguo[0][day]); ?>日
				</div>
			</div>
		</div>
		<div class="con_f">
		</div>
	</div>
    <?php
 $word->save("Public/word/".$name.".doc"); ?>
</div>
	<br><br><br>	
    <div class="contents"><br/><br/>
    	<div class="con_t">
			<table class="jbqk">
			<tr>
				<td class="space"></td>
				<td class="space"></td>
				<td align="center">&nbsp;&nbsp;&nbsp;&nbsp;冀眼法医鉴中心[20<?php echo ($jieguo[0][ljz]); ?>]临检字第<?php echo ($jieguo[0][ljh]); ?>号</td>
			</tr>
			
			</table>
			<table class="jbqk1">
			<tr>
				<td colspan="2"><h3>一、基本情况</h3></td>
				<td rowspan="4" style="text-align:left;">
					<font size="-2">（此处未加盖钢印无效）</font><br><br>
					&thinsp;&thinsp;<img src="<?php echo ($path); ?>" style="width:114px;height:151px;"/>
				</td>
			</tr>
			<tr>
				<td width="110px;"><h3>委 托 方:</h3></td>
				<td><?php echo ($jieguo[0][wtf]); ?></td>
			</tr>
			<tr>
				<td><h3>委托事项：</h3></td>
				<td><?php echo ($jieguo[0][wtsx]); ?></td>
			</tr>
			<tr>
				<td><h3>受理日期：</h3></td>
				<td><?php echo ($jieguo[0][slrq]); ?></td>
			</tr>
			<tr>
				<td style=" vertical-align:top;"><h3 style="margin-top:5%;">鉴定材料：</h3></td>
				<td colspan="2"><font style="line-height:2em; letter-spacing:1px;">
					<?php echo ($wts[0][jdcl]); ?>
				</font></td>
			</tr>
			<tr>
				<td><h3>鉴定日期：</h3></td>
				<td colspan="2"><?php echo ($jieguo[0][jdrq]); ?></td>
			</tr>
			<tr>
				<td><h3>鉴定地点：</h3></td>
				<td colspan="2"><?php echo ($jieguo[0][jddd]); ?></td>
			</tr>
			<tr>
				<td style=" vertical-align:top;"><h3 style="margin-top:5%;">被鉴定人：</h3></td>
				<td colspan="2"><font style="line-height:2em; letter-spacing:1px;"><?php echo ($jtbl[0][bjtrname]); ?>，<?php echo ($jtbl[0][sex]); ?>，<?php echo ($jtbl[0][csyear]); ?>年<?php echo ($jtbl[0][csmonth]); ?>月<?php echo ($jtbl[0][csday]); ?>日出生，<?php echo ($jtbl[0][idaddress]); ?>,<?php if(!empty($jtbl[0][idcard])){ echo "身份证号："; } echo ($jtbl[0][idcard]); ?></font></td>
			</tr>
			</table>
		</div>
		<div class="con">
			<table class="jazy">
			<tr>
				<td colspan="3">
					<h3>二、检案摘要</h3>
				</td>
			</tr>
			<tr>
				<td colspan="3" style="line-height:30px;">
					<?php
 $jazy=strip_tags($jieguo[0][jazy],'<br>'); echo $jazy; ?>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<h3>三、检验过程</h3>
				</td>
			</tr>
			<tr>
				<td colspan="3">
					<p><?php echo ($jieguo[0][jygc1]); ?></p>
					<p>
						<?php
 $jygc2=strip_tags($jieguo[0][jygc2]); echo $jygc2; ?>
					</p>
					<p><?php echo ($jieguo[0][jygc3]); ?></p>
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
					<div id="fxsmp">
						<?php
 $fxsm2=strip_tags($jieguo[0][fxsm2]); $fxsm2=trim($fxsm2); echo $fxsm2; ?>
					</div>
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
						被鉴定人<?php echo ($sqs[0][name]); echo ($jds[0][gy]); ?>损伤为<?php echo ($jieguo[0][fxsm6]); ?>。
					</p>
				</td>
			</tr>
			<tr>
				<td width="40%;"></td>
				<td colspan="2">
					&nbsp;主鉴定人：&nbsp;<?php echo ($jieguo[0][zjdr]); ?><br/><br/>
					《司法鉴定人执业证》证号：<?php echo ($jieguo[0][zjdrzh]); ?><br/><br/>
					&nbsp;鉴&nbsp;定&nbsp;人：&nbsp;<?php echo ($jieguo[0][jdr]); ?><br/><br/>
					《司法鉴定人执业证》证号：<?php echo ($jieguo[0][jdrzh]); ?><br/><br/>
					&nbsp;鉴&nbsp;定&nbsp;人：&nbsp;<?php echo ($jieguo[0][jdr1]); ?><br/><br/>
					《司法鉴定人执业证》证号：<?php echo ($jieguo[0][jdrzh1]); ?><br/><br/>
					&nbsp;审&nbsp;核&nbsp;人：&nbsp;<?php echo ($jieguo[0][shr]); ?><br/><br/>
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
		</div>
		<br><br><br>
	</div>
		<br/><br>
	<div id="ba">
		<a href="http://localhost/sifa(4)/Public/word/<?php echo ($name); ?>.doc">下载Word文档</a>
	</div><br><br><br>
	<div class="con_f"></div>
    </body>
</html>