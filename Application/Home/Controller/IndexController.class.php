<?php
namespace Home\Controller;
use Think\Controller;
use Think\Model;

class IndexController extends Controller {
    public function index(){
        $User=new Model('question');
        $data=$User->select();
//        dump($data[0]['title']);
        $this->assign('problemData',$data);
    	$this->display('index');
    }
    public function login(){
        echo "xxx";
    }
}