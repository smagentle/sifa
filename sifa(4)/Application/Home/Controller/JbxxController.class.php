<?php
namespace Home\Controller;
use Think\Controller;
class JbxxController extends Controller {
    public function jbxx(){
    	if(!$_SESSION){
    		$this  -> error('您还没有登录，请先登录！',U('Login/login'),2);
    	}else{
    		$sq = D('shenqing');//设置编号
            $id=$sq->field('id')->select();
            foreach ($id as $v) {
                foreach ($v as $value) {
                    $qb[]=substr($value,0,8);
                } 
            }
            $a=array_count_values($qb);

            $b=$a[date('Ymd')];

    		if(!empty($b)){
    			$id = date('Ymd').$b+1;
    		}else{
    			$id = date('Ymd')."1";
    		}
    		session(id,$id);//设置编号
    		$this -> display();
    	}
    }
    public function jbxxiframe(){
    	$buwei = D('jdbw');//鉴定部位表
    	$res = $buwei -> select();
    
    	$leibie = D('jdlb');//鉴定类别表
    	$res1 = $leibie -> select();
    	 
    	$fenlei = D('jdfl');//鉴定分类表
    	$res2 = $fenlei -> select();
    	
    	$dp = D('department');//部门表
    	$res3 = $dp -> where("dp_id = '$_SESSION[dp_id]'") -> select();
    	
    	$zj = D('zhuanjia');//专家表
    	$res4 = $zj -> where("dp_id = '$_SESSION[dp_id]'") -> select();
    	
    	$sq = D('shenqing');//申请表
    	$res5 = $sq -> where("id = '$_SESSION[id]'") -> select();
    	//print_r($res5);die;
    	$id = session(id);
    	 
    	$this -> assign('buwei',$res);
    	$this -> assign('leibie',$res1);
    	$this -> assign('fenlei',$res2);
    	$this -> assign('dp',$res3);
    	$this -> assign('zj',$res4);
    	$this -> assign('sqs',$res5);
    	$this -> assign('id',$id);
    	$this -> display();
    }
    public function jbxxiframe0(){
        $buwei = D('jdbw');//鉴定部位表
        $res = $buwei -> select();
    
        $leibie = D('jdlb');//鉴定类别表
        $res1 = $leibie -> select();
         
        $fenlei = D('jdfl');//鉴定分类表
        $res2 = $fenlei -> select();
        
        $dp = D('department');//部门表
        $res3 = $dp -> where("dp_id = '$_SESSION[dp_id]'") -> select();
        
        $zj = D('zhuanjia');//专家表
        $res4 = $zj -> where("dp_id = '$_SESSION[dp_id]'") -> select();
        
        $sq = D('shenqing');//申请表
        $res5 = $sq -> where("id = '$_SESSION[id]'") -> select();
        //print_r($res5);die;
        $id = session(id);
         
        $this -> assign('buwei',$res);
        $this -> assign('leibie',$res1);
        $this -> assign('fenlei',$res2);
        $this -> assign('dp',$res3);
        $this -> assign('zj',$res4);
        $this -> assign('sqs',$res5);
        $this -> assign('id',$id);

        $this -> display();
    }
    public function jbxxiframe1(){
    	$buwei = D('jdbw');//鉴定部位表
    	$res = $buwei -> select();
    
    	$leibie = D('jdlb');//鉴定类别表
    	$res1 = $leibie -> select();
    
    	$fenlei = D('jdfl');//鉴定分类表
    	$res2 = $fenlei -> select();
    	 
    	$dp = D('department');//部门表
    	$res3 = $dp -> where("dp_id = '$_SESSION[dp_id]'") -> select();
    	 
    	$sq = D('shenqing');//申请表
    	$res5 = $sq -> where("id = '$_SESSION[id]'") -> select();
    	
    	
    	//判断申请人的鉴定部位、类别和分类
    	$a = $res5[0][buwei];
    	$b = $res5[0][leibie];
    	$c = $res5[0][fenlei];
    	$a1 = $buwei -> where("id = '$a'") -> select();
    	$b1 = $leibie -> where("id = '$b'") -> select();
    	$c1 = $fenlei -> where("id = '$c'") -> select();
    	
    	$zj = D('zhuanjia');//专家表
    	$dpid = $_SESSION['dp_id'];
    	$zjia = substr($a1[0][name],0,3);
    	$res4 = $zj -> where("dp_id = '$dpid' and  zhuanye like '%$zjia%'") -> select();
    	
    	$id = session(id);

    
    	$this -> assign('buwei',$res);
    	$this -> assign('leibie',$res1);
    	$this -> assign('fenlei',$res2);
    	$this -> assign('dp',$res3);
    	$this -> assign('zj',$res4);
    	$this -> assign('sqs',$res5);
    	$this -> assign('a',$a1);
    	$this -> assign('b',$b1);
    	$this -> assign('c',$c1);
    	$this -> assign('id',$id);

        $jds=D('jds');
        $rejd=$jds->where("id='$_SESSION[id]'")->select();

        $this->assign('jds',$rejd);

    	$this -> display();
    }
    
    public function jbxxiframe2(){
    	$buwei = D('jdbw');//鉴定部位表
    	$res = $buwei -> select();
    
    	$leibie = D('jdlb');//鉴定类别表
    	$res1 = $leibie -> select();
    
    	$fenlei = D('jdfl');//鉴定分类表
    	$res2 = $fenlei -> select();
    
    	$dp = D('department');//部门表
    	$res3 = $dp -> where("dp_id = '$_SESSION[dp_id]'") -> select();
    
    	$sq = D('shenqing');//申请表
    	$res5 = $sq -> where("id = '$_SESSION[id]'") -> select();
    	 
    	$wts = D('weituos');
    	$res6 = $wts -> where("bianhao = '$_SESSION[id]'") -> select();
    	 
    	//判断申请人的鉴定部位、类别和分类
    	$a = $res5[0][buwei];
    	$b = $res5[0][leibie];
    	$c = $res5[0][fenlei];
    	$a1 = $buwei -> where("id = '$a'") -> select();
    	$b1 = $leibie -> where("id = '$b'") -> select();
    	$c1 = $fenlei -> where("id = '$c'") -> select();
    	
    	$zj = D('zhuanjia');//专家表
    	$dpid = $_SESSION['dp_id'];
    	$zjia = substr($a1[0][name],0,3);
    	$res4 = $zj -> where("dp_id = '$dpid' and  zhuanye like '%$zjia%'") -> select();
    	
    	$id = session(id);

        $jds=D('jds');
        $rejd=$jds->where("id='$_SESSION[id]'")->select();

        $this->assign('jds',$rejd);
    	
    	$m1=M('wtxy');//复1
    	$f1=$m1->where("p_id = '$_SESSION[id]'")->select();
    	$fx=json_encode($f1);
    	$this->assign('fx',$fx);
    	
    	$m2=M('wtxy1');//复2
    	$f2=$m2->where("p_id = '$_SESSION[id]'")->select();
    	$fc=json_encode($f2);
    	$this->assign('fc',$fc);
    	
    	$m3=M('wtxy2');//复3
    	$f3=$m3->where("p_id = '$_SESSION[id]'")->select();
    	$fv=json_encode($f3);
    	$this->assign('fv',$fv);
    	
    	$m4=M('wtxy3');//复4
    	$f4=$m4->where("p_id = '$_SESSION[id]'")->select();
    	$fb=json_encode($f4);
    	$this->assign('fb',$fb);
    	
    
    
    	$this -> assign('buwei',$res);
    	$this -> assign('leibie',$res1);
    	$this -> assign('fenlei',$res2);
    	$this -> assign('dp',$res3);
    	$this -> assign('zj',$res4);
    	$this -> assign('sqs',$res5);
    	$this -> assign('wts',$res6);
    	$this -> assign('a',$a1);
    	$this -> assign('b',$b1);
    	$this -> assign('c',$c1);
    	$this -> assign('id',$id);
    	$this -> display();
    }
    
    public function jbxxiframe3(){
    	$buwei = D('jdbw');//鉴定部位表
    	$res = $buwei -> select();
    
    	$leibie = D('jdlb');//鉴定类别表
    	$res1 = $leibie -> select();
    
    	$fenlei = D('jdfl');//鉴定分类表
    	$res2 = $fenlei -> select();
    
    	$dp = D('department');//部门表
    	$res3 = $dp -> where("dp_id = '$_SESSION[dp_id]'") -> select();
    
    	$sq = D('shenqing');//申请表
    	$res5 = $sq -> where("id = '$_SESSION[id]'") -> select();
    
    	$wts = D('weituos');
    	$res6 = $wts -> where("bianhao = '$_SESSION[id]'") -> select();
    	
    	$id = session(id);
        
        $pic=D('picture');//插入图片路径
        $ipa=$pic->where("id='$id'")->select();
        
        $this -> assign('ipa',$ipa);
    	//判断申请人的鉴定部位、类别和分类
    	$a = $res5[0][buwei];
    	$b = $res5[0][leibie];
    	$c = $res5[0][fenlei];
    	$a1 = $buwei -> where("id = '$a'") -> select();
    	$b1 = $leibie -> where("id = '$b'") -> select();
    	$c1 = $fenlei -> where("id = '$c'") -> select();
    	 
    	$zj = D('zhuanjia');//专家表
    	$dpid = $_SESSION['dp_id'];
    	$zjia = substr($a1[0][name],0,3);
    	$res4 = $zj -> where("dp_id = '$dpid' and  zhuanye like '%$zjia%'") -> select();
    	    	
    	$hbs = D('huibis');
    	$res7 = $hbs -> where("id = '$_SESSION[id]'") -> select();

        $jds=D('jds');
        $rejd=$jds->where("id='$_SESSION[id]'")->select();

        $this->assign('jds',$rejd);
    	
    	$m1=M('wtxy');//复1
    	$data=$m1->max(p_id);
    	$f1=$m1->where("p_id='$data'")->select();
    	$fx=json_encode($f1);
    	$this->assign('fx',$fx);
    	 
    	$m2=M('wtxy1');//复2
    	$data=$m2->max(p_id);
    	$f2=$m2->where("p_id='$data'")->select();
    	$fc=json_encode($f2);
    	$this->assign('fc',$fc);
    	 
    	$m3=M('wtxy2');//复3
    	$data=$m3->max(p_id);
    	$f3=$m3->where("p_id='$data'")->select();
    	$fv=json_encode($f3);
    	$this->assign('fv',$fv);
    	 
    	$m4=M('wtxy3');//复4
    	$data=$m4->max(p_id);
    	$f4=$m4->where("p_id='$data'")->select();
    	$fb=json_encode($f4);
    	$this->assign('fb',$fb);
    
    	$this -> assign('buwei',$res);
    	$this -> assign('leibie',$res1);
    	$this -> assign('fenlei',$res2);
    	$this -> assign('dp',$res3);
    	$this -> assign('zj',$res4);
    	$this -> assign('sqs',$res5);
    	$this -> assign('wts',$res6);
    	$this -> assign('hbs',$res7);
    	$this -> assign('a1',$a1);
    	$this -> assign('b1',$b1);
    	$this -> assign('c1',$c1);
    	$this -> assign('id',$id);

        $pic=M('picture');
        $stus1=$pic-> where("id='$_SESSION[id]'")->select();
        $stus=0;
        if (!empty($stus1)) {
            $stus=1;
        }else{
            $stus=0;
        }
        $this->assign('stus',$stus);

    	$this -> display();
    }
    
    public function jbxxiframe4(){
    	$buwei = D('jdbw');//鉴定部位表
    	$res = $buwei -> select();
    
    	$leibie = D('jdlb');//鉴定类别表
    	$res1 = $leibie -> select();
    
    	$fenlei = D('jdfl');//鉴定分类表
    	$res2 = $fenlei -> select();
    
    	$dp = D('department');//部门表
    	$res3 = $dp -> where("dp_id = '$_SESSION[dp_id]'") -> select();
    
    	$sq = D('shenqing');//申请表
    	$res5 = $sq -> where("id = '$_SESSION[id]'") -> select();
    
    	$wts = D('weituos');
    	$res6 = $wts -> where("bianhao = '$_SESSION[id]'") -> select();
    	 
    	$id = session(id);

        $jds=D('jds');
        $rejd=$jds->where("id='$_SESSION[id]'")->select();

        $this->assign('jds',$rejd);
    	
    	$m1=M('wtxy');//复1
    	$data=$m1->max(p_id);
    	$f1=$m1->where("p_id='$data'")->select();
    	$fx=json_encode($f1);
    	$this->assign('fx',$fx);
    	 
    	$m2=M('wtxy1');//复2
    	$data=$m2->max(p_id);
    	$f2=$m2->where("p_id='$data'")->select();
    	$fc=json_encode($f2);
    	$this->assign('fc',$fc);
    	 
    	$m3=M('wtxy2');//复3
    	$data=$m3->max(p_id);
    	$f3=$m3->where("p_id='$data'")->select();
    	$fv=json_encode($f3);
    	$this->assign('fv',$fv);
    	 
    	$m4=M('wtxy3');//复4
    	$data=$m4->max(p_id);
    	$f4=$m4->where("p_id='$data'")->select();
    	$fb=json_encode($f4);
    	$this->assign('fb',$fb);
    
    	//判断申请人的鉴定部位、类别和分类
    	$a = $res5[0][buwei];
    	$b = $res5[0][leibie];
    	$c = $res5[0][fenlei];
    	$a1 = $buwei -> where("id = '$a'") -> select();
    	$b1 = $leibie -> where("id = '$b'") -> select();
    	$c1 = $fenlei -> where("id = '$c'") -> select();
    
    	$zj = D('zhuanjia');//专家表
    	$dpid = $_SESSION['dp_id'];
    	$zjia = substr($a1[0][name],0,3);
    	$res4 = $zj -> where("dp_id = '$dpid' and  zhuanye like '%$zjia%'") -> select();
    
    	$hbs = D('huibis');
    	$res7 = $hbs -> where("id = '$_SESSION[id]'") -> select();
    	
    	$jtbl = D('jietanbl');
    	$res8 = $jtbl -> where("id = '$_SESSION[id]'") -> select();
    
    	$this -> assign('buwei',$res);
    	$this -> assign('leibie',$res1);
    	$this -> assign('fenlei',$res2);
    	$this -> assign('dp',$res3);
    	$this -> assign('zj',$res4);
    	$this -> assign('sqs',$res5);
    	$this -> assign('wts',$res6);
    	$this -> assign('hbs',$res7);
    	$this -> assign('jtbl',$res8);
    	$this -> assign('a1',$a1);
    	$this -> assign('b1',$b1);
    	$this -> assign('c1',$c1);
    	$this -> assign('id',$id);
    	$this -> display();
    }
    
    public function jbxxiframe5(){
    	if($_GET[id]){
    		$_SESSION[id] = $_GET[id];
    	}
    	$buwei = D('jdbw');//鉴定部位表
    	$res = $buwei -> select();
    
    	$leibie = D('jdlb');//鉴定类别表
    	$res1 = $leibie -> select();
    
    	$fenlei = D('jdfl');//鉴定分类表
    	$res2 = $fenlei -> select();
    
    	$dp = D('department');//部门表
    	$res3 = $dp -> where("dp_id = '$_SESSION[dp_id]'") -> select();
    
    	$sq = D('shenqing');//申请表
    	$res4 = $sq -> where("id = '$_SESSION[id]'") -> select();
    
    	$wts = D('weituos');
    	$res5 = $wts -> where("bianhao = '$_SESSION[id]'") -> select();
    
    	$id = session(id);

        $jds=D('jds');
        $rejd=$jds->where("id='$_SESSION[id]'")->select();

        $this->assign('jds',$rejd);
    	
    	$m1=M('wtxy');//复1
    	$data=$m1->max(p_id);
    	$f1=$m1->where("p_id='$data'")->select();
    	$fx=json_encode($f1);
    	$this->assign('fx',$fx);
    	 
    	$m2=M('wtxy1');//复2
    	$data=$m2->max(p_id);
    	$f2=$m2->where("p_id='$data'")->select();
    	$fc=json_encode($f2);
    	$this->assign('fc',$fc);
    	 
    	$m3=M('wtxy2');//复3
    	$data=$m3->max(p_id);
    	$f3=$m3->where("p_id='$data'")->select();
    	$fv=json_encode($f3);
    	$this->assign('fv',$fv);
    	 
    	$m4=M('wtxy3');//复4
    	$data=$m4->max(p_id);
    	$f4=$m4->where("p_id='$data'")->select();
    	$fb=json_encode($f4);
    	$this->assign('fb',$fb);
    
    	//判断申请人的鉴定部位、类别和分类
    	$a = $res4[0][buwei];
    	$b = $res4[0][leibie];
    	$c = $res4[0][fenlei];
    	$a1 = $buwei -> where("id = '$a'") -> select();
    	$b1 = $leibie -> where("id = '$b'") -> select();
    	$c1 = $fenlei -> where("id = '$c'") -> select();
    
    	$zj = D('zhuanjia');//专家表
    	$dpid = $_SESSION['dp_id'];
    	$zjia = substr($a1[0][name],0,3);
    	$res6 = $zj -> where("dp_id = '$dpid' and  zhuanye like '%$zjia%'") -> select();
    
    	$hbs = D('huibis');
    	$res7 = $hbs -> where("id = '$_SESSION[id]'") -> select();
    	 
    	$jtbl = D('jietanbl');
    	$res8 = $jtbl -> where("id = '$_SESSION[id]'") -> select();
    	
    	
    	$buwei = substr($res8[0][jdsx],0,6);
    	if(strlen($buwei) != 6){
    		$buwei = "耳鼻喉";
    	}else{
    		$buwei = $buwei;
    	}
    	
    	
    	$img = D('photo');
    	$res9 = $img -> where("id = '$id'") -> select();
    	$path = $res9[0][path];
    	
    	$jg = D('jieguo');
    	$jieguo = $jg -> where("bianhao = '$id'") -> select();
    
    	$this -> assign('buwei',$res);
    	$this -> assign('leibie',$res1);
    	$this -> assign('fenlei',$res2);
    	$this -> assign('dp',$res3);
    	$this -> assign('sqs',$res4);
    	$this -> assign('wts',$res5);
    	$this -> assign('zj',$res6);
    	$this -> assign('hbs',$res7);
    	$this -> assign('jtbl',$res8);
    	$this -> assign('a1',$a1);
    	$this -> assign('b1',$b1);
    	$this -> assign('c1',$c1);
    	$this -> assign('id',$id);
    	$this -> assign("path",$path);
    	$this -> assign("jdbw",$buwei);
    	$this -> assign('jieguo',$jieguo);
    	$this -> display();
    }
    
    public function index(){
    	$name = $_GET['id'];
    	if($name == 'shenqs'){//获取前台传递过来的数据
    		if($_POST){
    			$jdsign = 1;//步骤标识
    			$_POST[sqs][id] = $_SESSION['id'];//系统生成的id号/编号
    			$_POST[sqs][dp_id] = $_SESSION['dp_id'];
    			$_POST[sqs][jdsign] = $jdsign;
    			if( $_POST[sqs][name] == '' || $_POST[sqs][sex] == '' || $_POST[sqs][year] == '' || $_POST[sqs][month] == '' || $_POST[sqs][day] == '' /*|| $_POST[sqs][sheng] == '' || $_POST[sqs][shi] == '' || $_POST[sqs][xian] == ''*/ || $_POST[sqs][address] == '' || /*$_POST[sqs][idcard] == '' ||*/$_POST[sqs][sgyear] == '' || $_POST[sqs][sgmonth] == '' || $_POST[sqs][sgday] == '' || /*$_POST[sqs][sghour] == '' || $_POST[sqs][sgsec] == '' || */$_POST[sqs][sgaddress] == '' /*|| $_POST[sqs][sgaddress1] == ''*/ || $_POST[sqs][gjssbw] == '' /*|| $_POST[sqs][gjssbw1] == '' || $_POST[sqs][zhengz] == '' */|| /*$_POST[sqs][zhengz1] == '' ||*/ $_POST[sqs][yiyuan] == '' || /*$_POST[sqs][zhenduan] == '' || $_POST[sqs][zyyear] == '' || $_POST[sqs][zymonth] == '' || $_POST[sqs][zyday] == '' || $_POST[sqs][zyyiyuan] == '' || $_POST[sqs][zyzhenduan] == '' || */$_POST[sqs][buwei] == '' || $_POST[sqs][leibie] == '' || $_POST[sqs][fenlei] == '' /*|| $_POST[sqs][y1year] == '' || $_POST[sqs][zy1month] == '' || $_POST[sqs][zy1day] == '' || $_POST[sqs][zy1yiyuan] == '' || $_POST[sqs][zy1zhenduan] == '' || $_POST[sqs][qtjd] == '' || $_POST[sqs][shenqr] == '' || $_POST[sqs][phone] == '' || $_POST[sqs][dailiren] == '' || $_POST[sqs][guanxi] == '' || $_POST[sqs][sqyear] == '' || $_POST[sqs][sqmonth] == '' || $_POST[sqs][sqday] == '' */){
    				$this -> error('保存失败！数据不完整',U('Jbxx/jbxxiframe?return='.CURRENT_URL),2);
    			}//判断数据是否完整
    			
    			if(!empty($_POST[sqs][idcard])){
        			//判断身份证号是否合法
        			$idcard = strtoupper($_POST[sqs][idcard]);
        			$regx = "/(^\d{15}$)|(^\d{17}([0-9]|X)$)/";
        			$arr_split = array();
        			if(!preg_match($regx, $idcard)){
        				$this -> error('身份证号码不合法！',U('Jbxx/jbxxiframe?return='.CURRENT_URL),2);
        			}
        			if(15==strlen($idcard)){ //检查15位
        				$regx = "/^(\d{6})+(\d{2})+(\d{2})+(\d{2})+(\d{3})$/";
        				@preg_match($regx, $idcard, $arr_split);
        				//检查生日日期是否正确
        				$dtm_birth = "19".$arr_split[2] . '/' . $arr_split[3]. '/' .$arr_split[4];
        				if(!strtotime($dtm_birth)){
        					$this -> error('身份证号码不合法！',U('Jbxx/jbxxiframe?return='.CURRENT_URL),2);
        				} else {
        					//保存数据
        					$sq = D('shenqing');
        					$data = $_POST[sqs];
        					$res = $sq -> add($data);
        					if($res){
        						//$this -> ajaxReturn($data, '保存成功！');
        						$this -> success('保存成功！',U('Jbxx/jbxxiframe1'),1);
        					}else{
        						$this -> error('保存失败！数据不完整',U('Jbxx/jbxxiframe?return='.CURRENT_URL),2);
        					}
        				}
        			}else{      //检查18位
        				$regx = "/^(\d{6})+(\d{4})+(\d{2})+(\d{2})+(\d{3})([0-9]|X)$/";
        				@preg_match($regx, $idcard, $arr_split);
        				$dtm_birth = $arr_split[2] . '/' . $arr_split[3]. '/' .$arr_split[4];
        				if(!strtotime($dtm_birth)){ //检查生日日期是否正确
        					$this -> error('身份证号码不合法！',U('Jbxx/jbxxiframe?return='.CURRENT_URL),2);
        				}else{
        					//检验18位身份证的校验码是否正确。
        					//校验位按照ISO 7064:1983.MOD 11-2的规定生成，X可以认为是数字10。
        					$arr_int = array(7, 9, 10, 5, 8, 4, 2, 1, 6, 3, 7, 9, 10, 5, 8, 4, 2);
        					$arr_ch = array('1', '0', 'X', '9', '8', '7', '6', '5', '4', '3', '2');
        					$sign = 0;
        					for ( $i = 0; $i < 17; $i++ ){
        						$b = (int) $idcard{$i};
        						$w = $arr_int[$i];
        						$sign += $b * $w;
        					}
        					$n = $sign % 11;
        					$val_num = $arr_ch[$n];
        					if ($val_num != substr($idcard,17, 1)){
        						$this -> error('身份证号码不合法！',U('Jbxx/jbxxiframe?return='.CURRENT_URL),2);
        					}else{
        						//保存数据
        						$sq = D('shenqing');
        						$data = $_POST[sqs];
        						$res = $sq -> add($data);
        						if($res){
        							//$this -> ajaxReturn($data, '保存成功！');
        							$this -> success('保存成功！',U('Jbxx/jbxxiframe0'),1);
        						}else{
        							$this -> error('保存失败！数据不完整',U('Jbxx/jbxxiframe?return='.CURRENT_URL),2);
        						}
        					}
        				}
        			}
                }else{
                    $sq = D('shenqing');
                    $data = $_POST[sqs];
                    $res = $sq -> add($data);
                    if($res){
                        //$this -> ajaxReturn($data, '保存成功！');
                        $this -> success('保存成功！',U('Jbxx/jbxxiframe0'),1);
                    }else{
                        $this -> error('保存失败！数据不完整',U('Jbxx/jbxxiframe?return='.CURRENT_URL),2);
                    }
                }
    		}
    	}else{
            if($name == 'jds'){
                $jdsign=2;//步骤标识
                $_POST[jds][jdsign]=$jdsign;
                $_POST[jds][id] = $_SESSION['id'];
                $jds=$_POST[jds];
                $jd=D('jds');
                $re=$jd->add($jds);
                if($re){
                    $this -> success('保存成功！',U('Jbxx/jbxxiframe1'),1);
                }else{
                    $this -> error('保存失败！数据不完整',U('Jbxx/jbxxiframe0?return='.CURRENT_URL),2);
                }
            }else{
        		if($name == 'weits'){
        			$jdsign = 3;//步骤标识
        			$_POST[wts][jdsign] = $jdsign;
                    $_POST[wts][jdcl]=str_replace("2.",'<br>2',$_POST[wts][jdcl]);
                    $_POST[wts][jdcl]=str_replace("3.",'<br>3',$_POST[wts][jdcl]);
                    $_POST[wts][jdcl]=str_replace("4.",'<br>4',$_POST[wts][jdcl]);
                    $_POST[wts][jdcl]=str_replace("5.",'<br>5',$_POST[wts][jdcl]);
                    $_POST[wts][jdcl]=str_replace("6.",'<br>6',$_POST[wts][jdcl]);
        			$wts = $_POST[wts];
        			
        			//分别接收checkbox数据
        			$xy=$wts[xysx];
        			$xy1=$wts[xysx1];
        			$xy2=$wts[xysx2];
        			$xy3=$wts[xysx3];
        			 
        			$wtxy=M('wtxy');//复选框1
        			$data[p_id]=$_SESSION[id];
        			foreach($xy as $k=>$v){
        				$data[name]=$v;
        				$wtxy->data($data)->add();
        			}
        			
        			$wtxy1=M('wtxy1');//复选框2
        			$data[p_id]=$_SESSION[id];
        			foreach($xy1 as $k=>$v){
        				$data[name]=$v;
        				$wtxy1->data($data)->add();
        			}
        			
        			$wtxy2=M('wtxy2');//复选框3
        			$data[p_id]=$_SESSION[id];
        			foreach($xy2 as $k=>$v){
        				$data[name]=$v;
        				$wtxy2->data($data)->add();
        			}
        			
        			$wtxy3=M('wtxy3');//复选框4
        			$data[p_id]=$_SESSION[id];
        			foreach($xy3 as $k=>$v){
        				$data[name]=$v;
        				$wtxy3->data($data)->add();
        			}
        			 
        			$phone = $wts[lxrphone];
        			$myreg = "/^(((13[0-9]{1})|(15[0-9]{1})|176|177|178|(18[0-9]{1})|145|147)+\d{8})$/";
        			if(ereg($myreg,$phone)){
        				$this -> error('联系人电话号码不合法！',U('Jbxx/jbxxiframe1?return='.CURRENT_URL),2);
        			}
        			$wt = D('weituos');
        			$res = $wt -> add($wts);
        			if($res){
        				$this -> success('保存成功！',U('Jbxx/jbxxiframe2'),1);
        			}else{
        				$this -> error('保存失败！数据不完整',U('Jbxx/jbxxiframe1?return='.CURRENT_URL),2);
        			}
        		}else{
        			if($name == 'huibis'){
        				$jdsign = 4;//步骤标识
        				$_POST[hbs][jdsign] = $jdsign;
        				$_POST[hbs][id] = $_SESSION['id'];//系统生成的id号/编号
        				$hbs = $_POST[hbs];
        				$hb = D('huibis');
        				$res = $hb -> add($hbs);
    	    			if($res){
    	    				$this -> success('保存成功！',U('Jbxx/jbxxiframe3'),1);
    	    			}else{
    	    				$this -> error('保存失败！数据不完整',U('Jbxx/jbxxiframe2?return='.CURRENT_URL),2);
    	    			}
        			}else{
        				if($name == 'jietanbl'){
        					$jdsign = 5;//步骤标识
        					$_POST[jtbl][jdsign] = $jdsign;
        					$_POST[jtbl][id] = $_SESSION['id'];
        					$jtbl = $_POST[jtbl];
        					$jt = D('jietanbl');
        					$res = $jt -> add($jtbl);
    	    				if($res){
    		    				$this -> success('保存成功！',U('Jbxx/jbxxiframe4'),1);
    		    			}else{
    		    				$this -> error('保存失败！数据不完整',U('Jbxx/jbxxiframe3?return='.CURRENT_URL),2);
    		    			}
        				}
        			}
        		} 
            }
    	}
    }
    function upload(){
    	$id = D('photo');//设置编号
    	$res5 = $id -> max("id");
    	if(substr($res5,0,8) == date('Ymd')){
    		$id = substr($res5,8)+1;
    		$id = substr($res5,0,8).$id;
    	}else{
    		$id = date("Ymd")."1";
    	}
    	
    	$img=M("photo");
    
    	$se= strval($id);
    	$upload = new \Think\Upload();
    	$upload->maxSize   =     3145728 ;
    	$upload->exts      =     array('jpg', 'gif', 'png', 'jpeg');
    	$upload->rootPath = './Public/Uploads/';
    	$upload->autoSub  = true;
    	$upload->savePath  =      '';
    	$upload->saveName = $se;
    	
    	$info   =   $upload->upload();
    	//var_dump($info);die;
    	if(!$info) {
    		$this -> error('照片上传失败！');
    	}else{
    		$this ->success('照片上传成功！');
    		$day=date("Y-m-d");
    		$data[id]=$se;
    		$data[name]=$se;
    		$data[path]="Public/Uploads/".$day."/".$se.".".$info[upload][ext];
    		$img->add($data);
    	}
    }
    function uppic(){
        $pic=M("picture");

        $se= strval($_SESSION[id]); //strval()返回字符串
        $upload = new \Think\Upload();
        $upload->maxSize = 3145728;
        $upload->exts = array('jpg', 'gif', 'png', 'jpeg');
        $upload->rootPath = './Public/picture/';
        $upload->autoSub  = true;
        $upload->savePath  = '';
        $upload->saveName = $se;
        
        $info = $upload->upload();

        if(!$info) {
            $this -> error($upload->getError());
        }else{   
            $day=date("Y-m-d");
            $data[id]=$se;
            $data[name]=$se;
            $data[path]="Public/picture/".$day."/".$se.".".$info[upload][ext];
            $pic->add($data);

            $this ->success('照片上传成功！',U('Jbxx/jbxxiframe3','status=1'),1);//
        }
    }
    
}