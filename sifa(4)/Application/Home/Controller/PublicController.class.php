<?php
namespace Home\Controller;
use Think\Controller;
class PublicController extends Controller {
    public function jump(){
	    if(!$_SESSION){
	    		$this  -> error('您还没有登录，请先登录！',U('Login/login'));
	    	}else{
	    		$this -> display();
	    	}
	    }
    
}