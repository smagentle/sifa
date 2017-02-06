<?php
namespace Home\Controller;
use Think\Controller;
class SysController extends Controller {
    public function index(){
    	if(!$_SESSION){
    		$this  -> error('您还没有登录，请先登录！',U('Login/login'),1);
    	}else{
    		$this -> assign("name",$_SESSION('name'));
    		$this -> display();
    	}
    	
    }
    public function sysiframe(){
    	if(!$_SESSION){
    		$this  -> error('您还没有登录，请先登录！',U('Login/login'),1);
    	}else{
    		//实例化查询
    		$dp = D('department');
    		$zhuanjia = D('zhuanjia');
    		$d = $dp -> select();
    		$this -> assign("dp", $d);//查询机构表
    	
    		//权限设定：各部门只能看自己下边的信息
    		$zj = $zhuanjia -> where("dp_id = '$_SESSION[dp_id]'") -> order('zhuanye') -> select();
    		$this -> assign("zhuanjia",$zj);//查询专家表
    		$this -> display();
    	}
    	
    }
    public function add(){
    	$name = $_POST['jgname'];//获取提交的数据
    	$date['dp_name'] = $name;
    	$date['xukez'] = $_POST['xukez'];
    	$date['address'] = $_POST['address'];
    	$date['youbian'] = $_POST['youbian'];
    	$date['lianxiren'] = $_POST['lianxiren'];
    	$date['lianxiphone'] = $_POST['lianxiphone'];
    	//将获取的数据放在数组中
    	$dpment = M('department');//实例化对象
    	if($_SESSION['juese'] != 1){
    		$this -> error("抱歉，您没有权限！",U('Sys/sysiframe'),1);
    	}
    	if($name == '' && $date['xukez'] == '' && $date['address'] == '' && $date['youbian'] == '' && $date['lianxiren'] == '' && $date['lianxiphone'] == ''){
    		$this -> error("信息不完整！",U('Sys/sysiframe'),1);
    	}
    	$res = $dpment -> add($date);
    	if($res){
    		$this -> success("添加成功！",U('Sys/sysiframe'),1);
    	}
    }
    public function addzj(){
    	$date['zjname'] = $_POST['zjname'];
    	$date['dp_name'] = $_POST['dpname'];
    	$date['zhuanye'] = $_POST['zhuanye'];
    	$date['dp_id'] = $_SESSION['dp_id'];//获取提交的数据并放到数组中
    	$zj = M('zhuanjia');//实例化对象
    	if($date['zjname'] == '' && $date['dp_name'] == '' && $date['zhuanye'] == ''){
    		$this -> error("信息不完整！",U('Sys/sysiframe'),1);
    	}
    	$res = $zj -> add($date);
    	if($res){
    		$this -> success("添加成功！",U('Sys/sysiframe'),1);
    	}
    }
    public function del(){
    	$id = $_GET['id'];
    	$zhuanjia = D('zhuanjia');
    	$res = $zhuanjia -> where("id=$id") -> delete();
    	if($res){
    		$this -> success("操作成功！",U('Sys/sysiframe'),1);
    	}else{
    		$this -> error("操作失败！",U('Sys/sysiframe'),1);
    	}
    }
}