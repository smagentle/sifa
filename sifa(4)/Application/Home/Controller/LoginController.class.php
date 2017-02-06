<?php
namespace Home\Controller;
use Think\Controller;
class LoginController extends Controller {
	public function login(){
		$this->display();
	}
	public function index(){
		//获取表单提交信息
		$name = $_POST['username'];
		$pwd = $_POST['password'];
		//实例化查询
		$user = D('user');
		$department = D('department');
		//查找用户名是否存在
		$res = $user -> where("username='{$name}'") -> select();
		session(name,$res[0][name]);//设置session
		session(juese,$res[0][juese]);
		//查找用户名所对应的部门号
		$dp = $department -> where("dp_id='{$res[0][dp_id]}'") -> select();
		session(dp,$dp[0][dp_name]);//设置session
		session(dp_id,$dp[0][dp_id]);
		
		if($res){
			if($res[0][password] == $pwd){
				$this -> success('信息核对正确,进行数据更新...',U('Index/main'),3);
			}else{
				$this -> error('用户名或密码不正确，请重新登录',U('Login/login'),1);
			}
		}else{
			$this -> error('用户不存在，请重新登录',U('Login/login'),1);
		}
	}
	public function logout(){
		if(isset($_SESSION['name'])){
			session('[destroy]');
			$this -> success('退出成功,谢谢使用',U('Login/login'),1);
		}else{
			$this -> success('退出成功，谢谢使用',U('Login/login'),1);
		}
	}
}