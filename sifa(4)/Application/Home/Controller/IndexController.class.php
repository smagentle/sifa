<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
    	$this -> redirect('Login/login');
    }
    public function main(){
	    if(!$_SESSION){
	    		$this  -> error('您还没有登录，请先登录！',U('Login/login'));
	    	}else{
	    		$this -> display();
	    	}
	    }
    public function mainiframe(){
	    if(!$_SESSION){
	    		$this  -> error('您还没有登录，请先登录！',U('Login/login'));
	    	}else{
	    		$this -> display();
	    	}
	    }
}