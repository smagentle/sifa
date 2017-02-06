<?php
namespace Home\Controller;
use Think\Controller;
class PrinterController extends Controller {
	public function printer(){
		$this->display();
	}
	public function abc(){
		$tab = D('biaozhun1');
		$data[p_id] = $_POST[id];
		$e = $tab -> where($data) -> order('id DESC') -> select();
		$this -> ajaxReturn($e,'json');
	}
	public function def(){
		$tab = D('biaozhun1');
		$data[id] = $_POST[id];
		$r = $tab -> where($data) -> order('id DESC') -> select();
		$this -> ajaxReturn($r,'json');
	}
	public function shenqing(){
		$id = $_GET['id'];
		
		$buwei = D('jdbw');//鉴定部位表
		$res = $buwei -> select();
		
		$leibie = D('jdlb');//鉴定类别表
		$res1 = $leibie -> select();
		
		$fenlei = D('jdfl');//鉴定分类表
		$res2 = $fenlei -> select();
		
		$sq = D('shenqing');
		$res3 = $sq -> where("id = '$id'") -> select();
		
		//判断申请人的鉴定部位、类别和分类
		$a = $res3[0][buwei];
		$b = $res3[0][leibie];
		$c = $res3[0][fenlei];
		$a1 = $buwei -> where("id = '$a'") -> select();
		$b1 = $leibie -> where("id = '$b'") -> select();
		$c1 = $fenlei -> where("id = '$c'") -> select();
		
		
		$this -> assign('buwei',$res);
		$this -> assign('leibie',$res1);
		$this -> assign('fenlei',$res2);
		$this -> assign('sqs',$res3);
		$this -> assign('a1',$a1);
		$this -> assign('b1',$b1);
		$this -> assign('c1',$c1);
		$this -> assign('id',$id);
		$this -> assign('dp_name',$_SESSION['dp']);
		$this -> display();
	}
    public function juedings(){
        $id=$_GET['id'];
        $jds=D('jds');
        $re=$jds->where("id='$id'")->select();
        $this->assign('jds',$re);

        $sq = D('shenqing');
        $res3 = $sq -> where("id = '$id'") -> select();
        $this -> assign('sqs',$res3);

        $dp = D('department');//部门表
    	$res9 = $dp -> where("dp_id = '$_SESSION[dp_id]'") -> select();
    	$this->assign('dp',$res9);

        $this->display();
    }
	public function weituos(){
		$id = $_GET['id'];
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
    	
    	$this -> assign('buwei',$res);
    	$this -> assign('leibie',$res1);
    	$this -> assign('fenlei',$res2);
    	$this -> assign('dp',$res3);
    	$this -> assign('sqs',$res4);
    	$this -> assign('wts',$res5);
    	$this -> assign('a1',$a1);
    	$this -> assign('b1',$b1);
    	$this -> assign('c1',$c1);
    	$this -> assign('id',$id);
    	$this -> display();
	}
	public function huibis(){
        $id = $_GET['id'];
        $hb=D('huibis');
        $re=$hb->where("id='$id'")->select();
        $this->assign('hbs',$re);

        $zj = D('zhuanjia');//专家表
        $dpid = $_SESSION['dp_id'];
        $zjia = substr($a1[0][name],0,3);
        $res6 = $zj -> where("dp_id = '$dpid' and  zhuanye like '%$zjia%'") -> select();
        $this -> assign('zj',$res6);

        $dp = D('department');//部门表
    	$res9 = $dp -> where("dp_id = '$_SESSION[dp_id]'") -> select();
    	$this->assign('dp',$res9);
        
        $sq = D('shenqing');
        $res3 = $sq -> where("id = '$id'") -> select();
        $this -> assign('sqs',$res3);

        $this->display();
    }
    public function jietanbl(){
        $id = $_GET['id'];
        $jt=D('jietanbl');
        $re=$jt->where("id='$id'")->select();
        $this->assign('jtbl',$re);

        $sq = D('shenqing');
        $res3 = $sq -> where("id = '$id'") -> select();
        $this -> assign('sqs',$res3);

        $this->display();
    }
	public function yijianshu(){
		$id = $_GET['id'];
		$sq = D('shenqing');
		$res = $sq -> where("id = '$id'") -> select();
		if($res[0][id] == ''){
			echo "<script> alert('您的信息不完整！'); window.close();</script>";
		}
		
		$wt = D('weituos');
		$res1 = $wt -> where("bianhao = '$id'") -> select();
		if($res1[0][bianhao] == ''){
			echo "<script> alert('您的信息不完整！'); window.close();</script>";
		}
		
		$hb = D('huibis');
		$res2 = $hb -> where("id = '$id'") -> select();
		if($res2[0][id] == ''){
			echo "<script> alert('您的信息不完整！'); window.close();</script>";
		}
		
		$jt = D('jietanbl');
		$res3 = $jt -> where("id = '$id'") -> select();
        $jc=$res3[0][ygqk].$res3[0][ygqk1].$res3[0][ygqk2].$res3[0][ygqk3].$res3[0][ygqk4].$res3[0][ygqk5].$res3[0][ygqk6].$res3[0][ygqk7].$res3[0][ygqk8].$res3[0][ygqk9].$res3[0][ygqk10].$res3[0][ygqk11].$res3[0][ygqk12].$res3[0][ygqk13].$res3[0][ygqk14].$res3[0][ygqk15].$res3[0][ygqk16].$res3[0][ygqk17].$res3[0][ygqk18].$res3[0][ygqk19].$res3[0][ygqk20];
        $jy=trim($jc);
		if($res3[0][id] == ''){
			echo "<script> alert('您的信息不完整！'); window.close();</script>";
		}
		
		$img = D('photo');
		$res4 = $img -> where("id = '$id'") -> select();
		if($res4[0][id] == ''){
			echo "<script> alert('您还没有上传照片！'); window.close();</script>";
		}
		
		$buwei = substr($res3[0][jdsx],0,6);
		if(strlen($buwei) != 6){
			$buwei = "耳鼻喉";
		}else{
			$buwei = $buwei;
		}
		
		
		$img = D('photo');
		$res4 = $img -> where("id = '$id'") -> select();
		$path = $res4[0][path];
		
		$tab=D('zxcv');
		$se1=$tab->select();
		$this->assign('se1',$se1);
		$this -> assign('abc',121);
		
		$this -> assign("id",$id);
		$this -> assign("sqs",$res);
		$this -> assign("wts",$res1);
		$this -> assign("hbs",$res2);
		$this -> assign("jtbl",$res3);
        $this -> assign("jy",$jy);
		$this -> assign("path",$path);
		$this -> assign("buwei",$buwei);
		$this -> display();
	}
	public function jieguo(){
		$id = $_POST['bianhao'];
		$sq = D('shenqing');
		$res = $sq -> where("id = '$id'") -> select();
		
		$wt = D('weituos');
		$res1 = $wt -> where("bianhao = '$id'") -> select();
		
		$hb = D('huibis');
		$res2 = $hb -> where("id = '$id'") -> select();
		
		$jt = D('jietanbl');
		$res3 = $jt -> where("id = '$id'") -> select();
				
		$img = D('photo');
		$res4 = $img -> where("id = '$id'") -> select();
				
		$buwei = substr($res3[0][jdsx],0,6);
		if(strlen($buwei) != 6){
			$buwei = "耳鼻喉";
		}else{
			$buwei = $buwei;
		}
				
		$img = D('photo');
		$res4 = $img -> where("id = '$id'") -> select();
		$path = $res4[0][path];
		
		if($_POST){
			$jdjg = D('jieguo');
			$data[bianhao] = $id;
			$data[name] = $_POST['name'];
			$data[dp_id] = $_SESSION['dp_id'];
			$data[department] = $_SESSION['dp'];
			$data[date] = $_POST['date'];
			$data[jieguo] = $_POST['fxsm6'];
			$data[jdsign] = 5;
            $data[ljz] = $_POST['ljz'];
            $data[ljh] = $_POST['ljh'];
			$data[fxsm] = $_POST['fxsm'];
			$data[fxsm1] = $_POST['fxsm1'];
			$data[fxsm2] = $_POST['fxsm2'];
			$data[fxsm3] = $_POST['fxsm3'];
			$data[fxsm4] = $_POST['fxsm4'];
			$data[fxsm5] = $_POST['fxsm5'];
			$data[fxsm6] = $_POST['fxsm6'];
			$data[zjdr] = $_POST['zjdr'];
			$data[zjdrzh] = $_POST['zjdrzh'];
			$data[jdr] = $_POST['jdr'];
			$data[jdrzh] = $_POST['jdrzh'];
			$data[jdr1] = $_POST['jdr1'];
			$data[jdrzh1] = $_POST['jdrzh1'];
			$data[shr] = $_POST['shr'];
			$data[shrzh] = $_POST['shrzh'];
			$data[year] = $_POST['year'];
			$data[month] = $_POST['month'];
			$data[day] = $_POST['day'];
            $data[gjqk0] = $_POST['gjqk0'];
            $data[gjqk1] = $_POST['gjqk1'];
            $data[gjqk2] = $_POST['gjqk2'];
            $data[gjqk3] = $_POST['gjqk3'];
            $data[gjqk4] = $_POST['gjqk4'];
            $data[gjqk5] = $_POST['gjqk5'];
            $data[wtf]=$_POST['wtf'];
            $data[wtsx]=$_POST['wtsx'];
            $data[slrq]=$_POST['slrq'];
            $data[jdrq]=$_POST['jdrq'];
            $data[jddd]=$_POST['jddd'];
            $data[jazy]=$_POST['jazy'];
            $data[jygc1]=$_POST['jygc1'];
            $data[jygc2]=$_POST['jygc2'];
            $data[jygc3]=$_POST['jygc3'];
			$res7 = $jdjg -> add($data);
			if($res7){
				$this -> success('正在生成,请稍候...',U("Printer/yijianshu1",array("id" => "$data[bianhao]")));
			}
		}else{
			$this -> assign("sqs",$res);
			$this -> assign("wts",$res1);
			$this -> assign("hbs",$res2);
			$this -> assign("jtbl",$res3);
			$this -> assign("path",$path);
			$this -> assign("buwei",$buwei);
			$this -> display();
		}
		
	}
	
	public function yijianshu1(){
		$id = $_GET['id'];
		$sq = D('shenqing');
		$res = $sq -> where("id = '$id'") -> select();
	
	
		$wt = D('weituos');
		$res1 = $wt -> where("bianhao = '$id'") -> select();
	
	
		$hb = D('huibis');
		$res2 = $hb -> where("id = '$id'") -> select();
	
	
		$jt = D('jietanbl');
		$res3 = $jt -> where("id = '$id'") -> select();
	
	
		$img = D('photo');
		$res4 = $img -> where("id = '$id'") -> select();
	
	
		$buwei = substr($res3[0][jdsx],0,6);
		if(strlen($buwei) != 6){
			$buwei = "耳鼻喉";
		}else{
			$buwei = $buwei;
		}
	
	
		$img = D('photo');
		$res4 = $img -> where("id = '$id'") -> select();
		$path = $res4[0][path];
		
		$jg = D('jieguo');
		$jieguo = $jg -> where("bianhao = '$id'") -> select();
	
		$this -> assign("sqs",$res);
		$this -> assign("wts",$res1);
		$this -> assign("hbs",$res2);
		$this -> assign("jtbl",$res3);
		$this -> assign("path",$path);
		$this -> assign("buwei",$buwei);
		$this -> assign('jieguo',$jieguo);
		$this -> assign('name',$id);
		$this -> display();
	}
}