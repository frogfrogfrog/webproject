<?php
namespace Home\Controller;

use Think\Controller;
use Think\Model;

class IndexController extends Controller{
    public function index(){

        if (session('?username')) {
//            跳转到首页
            $User = new Model('question');
            $data = $User->select();
            $this->assign('problemData', $data);
            $this->display("index");

        } else {
            //跳转到登录页面

            $User = new Model('question');
            $data = $User->select();
            $this->assign('problemData', $data);
            $this->display("index");
        }
    }

    public function login()
    {
        echo "xxx";
    }
}