<?php
namespace Home\Controller;
use Think\Controller;
class BaogaoController extends Controller {
    public function baogao(){
	    if(!$_SESSION){
	    		$this  -> error('您还没有登录，请先登录！',U('Login/login'));
	    	}else{
	    		$this -> display();
	    	}
	    }
    public function index(){
    	if($_POST){
    		if($_POST['bianhao'] == ''){
    			if($_POST['start'] == '' || $_POST['end'] == ''){
    				$this -> error('查询条件不完整！',U('Baogao/baogaoiframe'),1);
    			}else{
    				$dp_id = $_SESSION['dp_id'];
    				$start = $_POST['start'];
    				$end = $_POST['end'];
    				$cx = D('jieguo');
    				$res = $cx -> where("dp_id = '$dp_id' and date between '$start' and '$end'") -> order ('bianhao desc') -> select();
    				$this -> assign("res",$res);
    				$this -> assign("id",$res[0][bianhao]);
    				$this -> display();
    			}
    		}else{
    			$dp_id = $_SESSION['dp_id'];
    			$bh = $_POST['bianhao'];
    			$cx = D('jieguo');
    			$res = $cx -> where("dp_id = '$dp_id' and bianhao = '$bh'") -> select();
    			$this -> assign("res",$res);
    			$this -> assign("id",$res[0][bianhao]);
    			$this -> display();
    		}
    	}
    }
}