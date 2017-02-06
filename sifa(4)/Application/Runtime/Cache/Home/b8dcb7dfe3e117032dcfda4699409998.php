<?php if (!defined('THINK_PATH')) exit();?><html>
    <head>
        <meta charset=utf-8>
        <style>
            body{ width:100%; font-size:17px; margin:0px auto;}
            .jds{
                width:80%;margin:0px auto;line-height:30px;
            }
            .jds table{
                width:100%; 
            }
            .jds table td{
                line-height:30px;
            }
            .jds input{
                border:0px;outline:none;font-size:17px;
                width:40px;text-align:center;
            }
        </style>
    </head>
    <body>
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
                    <td align="right"><font size="3"><?php echo ($dp[0][titzi]); ?>司鉴办字[20<input type="text" name="jds[zi]" value="<?php echo ($jds[0][zi]); ?>"> 第（<?php echo ($dp[0][bhao]); ?>）<input type="text" name="jds[hao]" value="<?php echo ($jds[0][hao]); ?>">号]</font></td>
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
                        序通则》第十一条、第十二条、第十六条，决定予以受理进行<input type="text" name="jds[bw]" style="border-bottom:1px solid #000000;width:50px;" value='<?php
 if($sqs[0][buwei]==""){ echo ""; }else if($sqs[0][buwei]==1){ echo "眼部"; }else if($sqs[0][buwei]==2){ echo "面部"; }else if($sqs[0][buwei]==3){ echo "耳鼻喉"; }else{ echo "口腔"; } ?>'>部位，<input type="text" name="jds[ssjd]" style="border-bottom:1px solid #000000;width:120px;" value='<?php
 if($sqs[0][fenlei]==""){ echo ""; }else if($sqs[0][fenlei]==1){ echo "交通事故"; }else if($sqs[0][fenlei]==2){ echo "工伤"; }else if($sqs[0][fenlei]==3){ echo "人身损害"; }else if($sqs[0][fenlei]==4){ echo "人身保险"; }else{ echo "康宁保险"; } ?>'/>损伤程度鉴定。
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
        </div><br><br>
    </body>
</html>