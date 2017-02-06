<?php if (!defined('THINK_PATH')) exit();?><html>
    <head>
        <meta charset=utf-8>
        <style>
            body{ width:100%; font-size:17px; margin:0px auto;}
            input{outline:none;}
            .jtblcon{ width:80%; margin-left:10%; border-collapse:collapse; word-break:break-all;}
            .jtblcon #contit{ border:none; width:100%;border-bottom:3px solid #333;font-size:18px; font-weight:bold;}
            .jtblcon #cons{ border:none; width:100%; height:35px;}
            .jtblcon input{ border:none; font-size:16px;}
            input[name='jtbl[date]']{ width:10%;}
            input[name='jtbl[didan]']{ width:18%;}
            input[name='jtbl[bjtrname]']{ width:20%;}
            input[name='jtbl[jtrname]']{ width:30%;}
            input[name='jtbl[sex]']{ width:4%; text-align:center;}
            input[name='jtbl[csyear]'],input[name='jtbl[csmonth]'],input[name='jtbl[csday]']{ width:6%; text-align:center;}
            input[name='jtbl[idaddress]'],input[name='jtbl[idcard]'],input[name='jtbl[jdsx]']{ width:33%;}
            input[name='jtbl[minzu]']{ width:10%;}
            input[name='jtbl[ygqk]']{width:83%;}
            input[name='upload']{background:#FFF;}

            .jtblcon #conbottom{ border-bottom:3px solid #333; height:35px;}
            span{ outline:none; font-size:16px; margin-left:-1px; margin-top:-5px;}
            #conend{ text-align:right; font-size:18px; font-weight:bold; width:100%;}
            #bldiv{
                width:80%;height:700px;margin-left:10.5%;
                border-collapse:collapse; word-break:break-all;
                line-height:35px;font-size:16px;
                border-bottom:3px solid #333;outline:none;
            }
        </style>
    </head>
    <body>
        <br>
        <table style="width:100%;">
            <tr>
                <td align="center">
                    <font size='6'>司法鉴定中心接谈笔录</font>
                </td>
            </tr>
            <tr height="25"></tr>
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
                    身份证地址：<input type="text" name="jtbl[idaddress]" value='<?php
 if($sqs[0][sheng] != ""){ echo $sqs[0][sheng]."省".$sqs[0][shi]."市".$sqs[0][xian].$sqs[0][address]; } ?>'/>
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
                    与鉴定有关情况：<br/>
                </td>
            </tr>
        </table>
        <div id="bldiv">
            &nbsp;&nbsp;<?php echo ($wts[0][jazy]); echo ($jtbl[0][ygqk]); ?>
        </div>
        <table class="tit">
            <tr height="30"></tr>
            <tr height="20"></tr>
        </table>
    </body>
</html>