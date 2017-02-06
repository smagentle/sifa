<?php if (!defined('THINK_PATH')) exit();?><<!DOCTYPE html>
<html>
<head>
    <meta charset=utf-8>
    <title>回避书</title>
    <style>
        body{ width:100%; font-size:17px; margin:0px auto;}
        .tit{ width:100%;}
        /*回避认定书样式*/
        input{font-size:17px;}
        .ttitle{ width:80%; margin-left:6%; letter-spacing:4px;}
        .ttitle input{ border:none; width:5%;}
        .ttitle1{ width:80%; margin-left:15%; letter-spacing:4px; text-indent:38px;}
        .ttitle1 input{ border:none; width:17.5%; border-bottom:1px solid #333;}
        .hbscon{ width:80%; margin-left:11%; border-collapse:collapse; text-align:center; letter-spacing:4px;}
        .hbscon td{ border:1px solid #333; height:30px;}
        .contit{ font-weight:bold;}
        .hbsbottom{ width:70%; text-align:right; margin-left:15%;}
        input[name="hbs[qzname]"]{ border:none; width:20%; border-bottom:1px solid #333; font-size:16px;}
        input[name="hbs[qzyear]"],input[name="hbs[qzmonth]"],input[name="hbs[qzday]"]{ border:none; width:6%; text-align:center; font-size:15px;}
        .zjname{ border:none; font-size:16px; width:100%; text-align:center;}
        .sfhb{ border:none; font-size:16px; width:100%; text-align:center;}
        .sfhb1{ border:none; font-size:16px;}
        .hbly{ width:196px; height:30px; border:none;}
    </style>
</head>
<body>
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
                        <font size="3"><?php echo ($dp[0][titzi]); ?>司鉴办字[20<input type="text" name="hbs[zihao]" value="<?php echo ($hbs[0][zihao]); ?>" />第（<?php echo ($dp[0][bhao]); ?>）<input type="text" name="hbs[zihao1]" value="<?php echo ($hbs[0][zihao1]); ?>" />号]</font>
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
                <?php if(is_array($zj)): $i = 0; $__LIST__ = $zj;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><!--<tr>
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
                    </tr>-->
                    <tr>
                    <td align="left"><input type="text" class="zjname" name="hbs[zjname<?php echo ($vo["id"]); ?>]" value="<?php echo ($vo["zjname"]); ?>"/></td>
                    <td><?php echo ($vo["dp_name"]); ?></td>
                    <td><?php echo ($vo["zhuanye"]); ?></td>
                    <td>
                        <label><input type="radio" class="sfhb1" name="hbs[sfhb<?php echo ($vo["id"]); ?>]" value="0" />是</label>
                        <label><input type="radio" class="sfhb1" name="hbs[sfhb<?php echo ($vo["id"]); ?>]" value="1" checked="checked"/>否</label>
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
                
                <tr height="50"></tr>
            </table>
        </form>
      </div>
</body>
</html>