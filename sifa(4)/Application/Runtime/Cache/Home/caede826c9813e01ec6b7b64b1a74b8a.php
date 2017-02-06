<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd" >
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="text/javascript" src="/sifa(4)/Public/Js/jquery0.js"></script>
<script>
		function abc(){
			$.ajax({
				type:"post",
				url:"/sifa(4)/index.php?s=/Home/Printer/abc",
				dataType:"json",
				data:{"id":$("#f1").val()},
				success:function(e){
					var str="";
					for(var i=0;i<e.length;i++){
						str+="<option value='"+e[i].id+"'>"+e[i].partname+"</option>";
					}
					$("#f2").html(str);
				}
			})
		}
		function def(){
			$.ajax({
				type:"post",
				url:"/sifa(4)/index.php?s=/Home/Printer/def",
				dataType:"json",
				data:{"id":$("#f2").val()},
				success:function(r){
					var str="";
					var a="";
					var b="";
					var c="";
					var d="";
					for(var i=0;i<r.length;i++){
						str+="<option value='"+r[i].id+"'>"+r[i].subname+"</option>";
						a+=r[i].subcode;
						b+=r[i].partcode;
						c+=r[i].subname;
						d+=r[i].subname;
					}
					$("#f3").html(str);
					$("#tiao").val(a);
					$("#xiang").val(b);
					$("#jibie").val(c);
					$("#jibie1").val(d);
				}
			})
		}
		function sut(){
			var jazy=document.getElementById("jazy");
			var tjazy=document.getElementById("tjazy");
			var jygc1=document.getElementById("jygc1");
			var tjygc1=document.getElementById("tjygc1");
			var jygc2=document.getElementById("jygc2");
			var tjygc2=document.getElementById("tjygc2");
			var jygc3=document.getElementById("jygc3");
			var tjygc3=document.getElementById("tjygc3");
			var fxsm2=document.getElementById("fxsm2");
			var tfxsm2=document.getElementById("tfxsm2");
			tjazy.value=jazy.innerHTML;
			tjygc1.value=jygc1.innerHTML;
			tjygc2.value=jygc2.innerHTML;
			tjygc3.value=jygc3.innerHTML;
			tfxsm2.value=fxsm2.innerHTML;

			var fr=document.getElementById('fr');
			fr.submit();
		}
	</script>
        <title>鉴定意见书</title>
        <style>
            *{
                padding:0px;margin:0px auto;
            }
            html,body{
            	background:#F4F4F4;
            }
            div,textarea{
            	outline:none;
            }
            form{
            	width:75%;background:white;
            	box-shadow:0 0 8px 6px rgba(153, 153, 153, .7);
            }
			.con_t,.con,.con_f{ width:90%;}
			.jbqk{ width:100%; margin-top:5%;}
			.jbqk1{ width:100%;}
			.jazy{ width:100%; margin-top:2%; font-size:16px;}
			.jbqk td{ padding:10px;}
			.jbqk1 td{ padding:5px;}
			.jazy td{ padding:5px;}
			.space{ width:40px;}
			.space1{ width:120px;}
            p{text-indent:2em; line-height:30px; letter-spacing:1px;}
            .timg{ border:none; width:114px; height:151px;margin-right:80px;}
            h3{ font-family:黑体;}
            ul{ list-style:none; }
            input{
            	outline:none; border:none;border-bottom:1px solid #ccc; 
            	font-size:16px; width:110px;background:none;
            	line-height:2em;
            }
			#f1{
				width:140px;height:30px;
				font-size:18px;border-radius:5px;
				background:none;line-height:2em;
			}
			#f2{
				width:700px;height:30px;
				font-size:18px;border-radius:5px;
				background:none;line-height:2em;
			}
			#f3{
				width:105px;height:30px;
				font-size:18px;border-radius:5px;
				background:none;line-height:2em;
			}
			#t{
				width: 180px;
			}
			.dinp{
				text-align:center;width:70px;
			}
			textarea{
				display:none;
			}
			.edi{
				word-break:break-all;line-height:30px;
				border-collapse:collapse;
			}
			#sbt{
				margin-left:48%; margin-top:5%; margin-bottom:5%;
				width:60px; height:30px; background:#6495ed;
			}
        </style>
    </head>
    <body>
    	<form id="fr" action="<?php echo U('Printer/jieguo');?>" method="post">
		<div class="con_t">
			<table class="jbqk">
				<tr>
					<td class="space"></td>
					<td class="space"></td>
					<td align="center">冀眼法医鉴中心[20<input type="text" name="ljz" style="width:30px">]临检字第<input type="text" name="ljh" style="width:40px;text-align:center;">号</td>
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
					<td rowspan="4"><img src="<?php echo ($path); ?>" class="timg" /></td>
				</tr>
				<tr>
					<td width="110px;"><h3>委 托 方:</h3></td>
					<td><input type="text" name="wtf" value="<?php echo ($wts[0][wtrname]); ?>" style="width:220px;border:none;" /></td>
				</tr>
				<tr>
					<td><h3>委托事项：</h3></td>
					<td><input type="text" name="wtsx" value="<?php echo ($jtbl[0][jdsx]); ?>" style="width:220px;border:none;"/></td>
				</tr>
				<tr>
					<td><h3>受理日期：</h3></td>
					<td><input type="text" name="slrq" value="<?php echo substr($wts[0][wtdate],0,4)?>年<?php echo substr($wts[0][wtdate],5,2)?>月<?php echo substr($wts[0][wtdate],8,2)?>日" style="width:220px;border:none;"/></td>
				</tr>
				<tr>
					<td style=" vertical-align:top;"><h3 style="margin-top:5%;">鉴定材料：</h3></td>
					<td colspan="2"><font style="line-height:2em; letter-spacing:1px;">
					<?php echo ($wts[0][jdcl]); ?>
					</font></td>
				</tr>
				<tr>
					<td><h3>鉴定日期：</h3></td>
					<td colspan="2">
						<input type="text" name="jdrq" value='<?php echo substr($jtbl[0][date],0,4)?>年<?php echo substr($jtbl[0][date],5,2)?>月<?php echo substr($jtbl[0][date],8,2)?>日' style="width:220px;border:none;"/>
					</td>
				</tr>
				<tr>
					<td><h3>鉴定地点：</h3></td>
					<td colspan="2">
						<input type="text" name="jddd" value="<?php echo session('dp');?>" style="width:270px;border:none;"/>
					</td>
				</tr>
				<tr>
					<td style=" vertical-align:top;"><h3 style="margin-top:5%;">被鉴定人：</h3></td>
					<td colspan="2"><font style="line-height:2em; letter-spacing:1px;"><?php echo ($jtbl[0][bjtrname]); ?>，<?php echo ($jtbl[0][sex]); ?>，<?php echo ($jtbl[0][csyear]); ?>年<?php echo ($jtbl[0][csmonth]); ?>月<?php echo ($jtbl[0][csday]); ?>日出生，<?php echo ($jtbl[0][idaddress]); ?>,<?php if(!empty($jtbl[0][idcard])){ echo "身份证号："; } echo ($jtbl[0][idcard]); ?></font></td>
				</tr>
			</table>
		</div>
		<div class="con">	
			<h3>二、检案摘要</h3>
			<div contenteditable="true" id="jazy" class="edi">
				<?php
 $jy1=trim($jy); $jy1=strip_tags($jy1); $jy=str_replace('<br>','',$jy1); echo $jy.'<br>'; ?>		
			&nbsp;&nbsp;根据中华人民共和国司法部令第132号《司法鉴定程序通则》第十一条，第十二条，第十六条，<?php echo substr($wts[0][wtdate],0,4)?>年<?php echo substr($wts[0][wtdate],5,2)?>月<?php echo substr($wts[0][wtdate],8,2)?>日由<?php echo ($wts[0][wtrname]); ?>委托我中心，要求为<?php echo ($jtbl[0][bjtrname]); ?>进行<?php echo ($jtbl[0][jdsx]); ?>。
			</div>
			<textarea name="jazy" id="tjazy"></textarea>
			
			<h3>三、检验过程</h3>
			<div contenteditable="true" id="jygc1" class="edi">
				<?php
 if($buwei == '眼部'){ echo "1.参照SF/ZJD0103003—2011《法医临床检验规范》、《视觉功能障碍法医鉴定指南》进行检查、鉴定。"; }else{ echo "1.参照SF/ZJD0103003—2011《法医临床检验规范》进行检查、鉴定。"; } ?>
			</div>
			<textarea name="jygc1" id="tjygc1"></textarea>
			<div contenteditable="true" id="jygc2" class="edi">
				2.被鉴定人到场，神志清楚，查体合作。
			</div>
			<textarea name="jygc2" id="tjygc2"></textarea>
			<div contenteditable="true" id="jygc3" class="edi">
				3.详阅<?php echo ($sqs[0][yiyuan]); ?>医院住院病历、<?php echo ($sqs[0][zyyiyuan]); ?>医院门诊病历、送检材料、客观检查报告单与现场检查结果相一致。
			</div>
			<textarea name="jygc3" id="tjygc3"></textarea>
						
			<h3>四、分析说明</h3>
			<p>
				<input type="hidden" name="bianhao" value="<?php echo ($id); ?>"/>
				<input type="hidden" name="name" value="<?php echo ($sqs[0][name]); ?>"/>
				<input type="hidden" name="date" value="<?php echo ($jtbl[0][date]); ?>"/>
			</p>
			<p>
				1.根据被鉴定人病史、病历记载及现场检查，被鉴定人<?php echo ($sqs[0][gjssbw1]); ?><input type="text" name="fxsm" value=''/>损伤符合<input id='t' type='text' name='fxsm1' value=''/>所致。
			</p>
			<div contenteditable="true" id="fxsm2" class="edi" style="text-indent:2em;">
				2.
			</div>
			<textarea name="fxsm2" id="tfxsm2"></textarea>
			<p>
				<b>部位：</b>
					<select id="f1" onchange="abc()">
						<option>--请选择--</option>
						<?php if(is_array($se1)): foreach($se1 as $key=>$v): ?><option value="<?php echo ($v["id"]); ?>"><?php echo ($v["name"]); ?></option><?php endforeach; endif; ?>
					</select>
			</p>
			<p>
				<b>伤情：</b>
					<select id="f2" onchange="def()">
						<option>--请选择--</option>
					</select>
			</p>
			<p>		
				<b>等级：</b>
					<select id="f3">
						<option>--请选择--</option>
					</select>
			</p>
			<p>
				3.根据最高人民法院、最高人民检察院、公安部、国家安全部、司法部关于发布《人体损伤程度鉴定标准》的公告，第<input id='tiao' type='text' name='fxsm3'/>条第<input id='xiang' type='text' name='fxsm4'/>项，被鉴定人<?php echo ($sqs[0][gjssbw1]); ?>损伤可定为<input id='jibie' type='text' name = 'fxsm5' value=''/>。
			</p>

			<h3>五、鉴定结论</h3>
			<p>
				被鉴定人<?php echo ($sqs[0][name]); echo ($jds[0][gy]); ?>损伤为<input id='jibie1' type='text' name='fxsm6'/>。
			</p>
			<table style="width:100%;">
				<tr style="text-align:center;">
					<td style="width:45%;"> </td>
					<td colspan="2" style="width:55%;text-align:left;">
						主鉴定人：<input id='t' type='text' name='zjdr' value=''/><br/><br/>
						《司法鉴定人执业证》证号：<input id='t' type='text' name='zjdrzh' value=''/><br/><br/>
						鉴 定 人：<input id='t' type='text' name='jdr' value=''/><br/><br/>
						《司法鉴定人执业证》证号：<input id='t' type='text' name='jdrzh' value=''/><br/><br/>
						鉴 定 人：<input id='t' type='text' name='jdr1' value=''/><br/><br/>
						《司法鉴定人执业证》证号：<input id='t' type='text' name='jdrzh1' value=''/><br/><br/>
						审 核 人：<input id='t' type='text' name='shr' value=''/><br/><br/>
						《司法鉴定人执业证》证号：<input id='t' type='text' name='shrzh' value=''/><br/><br/>
					</td>
				</tr>
				<tr style="text-align:center;">
					<td width="45%;"></td>
					<td colspan="2" style="width:55%;text-align:left;">
						<br/>
						&nbsp;&nbsp;&nbsp;&nbsp;<?php echo session('dp');?>
					</td>
				</tr>
				<tr>
					<td></td>
					<td colspan="2">
						&nbsp;&nbsp;&nbsp;&nbsp;<input type="text" name="year" class="dinp"/> 年 <input type="text" name="month" class="dinp"/> 月 <input type="text" name="day" class="dinp"/> 日
					</td>
				</tr>
			</table>
		</div>
		<div class="con_f"></div><br /><br />
		<center>
			<input type="button" value="保 存" onclick="sut()" style="width:100px;height:40px;background:#9393ff;border-radius:5px;cursor:pointer;" />
		</center><br/><br/>
		</form>
		<br/><br/><br/>
    </body>
</html>