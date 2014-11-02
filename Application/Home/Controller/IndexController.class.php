<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;

class IndexController extends Controller {
    public function index(){
//        $User=new Model('User');
//        $data=$User->select();
//        dump($data);
    	$this->display('index');
    }
    public function hello(){
        echo "xxx";
    }
}