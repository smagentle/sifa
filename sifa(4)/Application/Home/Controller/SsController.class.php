<?php
namespace Home\Controller;
use Think\Controller;
class SsController extends Controller {
    public function index(){
        $a=array("1231","1232","1241","1243","1252","1261","1253");
        foreach ($a as $v) {
            $b[]=substr($v,0,3);
        }
        var_dump($b);

        $c= max($b);
        echo $c;

        $this->display();
    }
}

?>