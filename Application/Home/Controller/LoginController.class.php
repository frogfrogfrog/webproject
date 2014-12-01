<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/11/12
 * Time: 20:52
 */

namespace Home\Controller;

use Think\Controller;


class LoginController extends Controller
{
    public function index()
    {
        echo "a";


    }

    public function login()
    {
        $User = M("User");
        $vo['uid'] = I('uid');
//        $vo['uid'] = "001";
        $vo['psw']=I('psw');
//        $vo['psw']="112";
        $list = $User->where("uid=%s",$vo['uid'])->find();
//        dump($list);
        $vo['nickname']=$list['nickname'];
        $vo['uidCheck']=1;
        $vo['pswCheck']=1;
        if($vo['nickname']==null){
            $vo['uidCheck']=0;
        }
        if($vo['psw']!=$list['psw']){
            $vo['pswCheck']=0;
        }

        if($vo['uidCheck']==1 && $vo['uidCheck']==1){
            session('name',$vo['nickname']);
            session('uid',$vo['uid']);
            session('expire',30*24*60*60);
        }
//        dump($vo);
        $this->ajaxReturn($vo, "json");
    }

    public function signUp()
    {
        $userInfo['uid'] = I('uid');
        $userInfo['nickname'] = I('nickname');
        $userInfo['psw'] = I('psw');
        $User = M("User");
        $result = $User->data($userInfo)->add(); // 写入数据到数据库
        $ret['status']=0;
        if(!$result){
            $ret['status']=0;
        }else{
            $ret['status']=1;
        }
        $this->ajaxReturn($ret,"json");

    }

    public function loginCheck()
    {
        $vo['status']=0;
        if (session('?name')) {
            $vo['status']=1;
            $vo['uid']=session('uid');
            $vo['name']=session('name');
        }
        else {

        }
        $this->ajaxReturn($vo,"json");
    }

    public function logout(){
        session(null);
        $vo=1;
        $this->ajaxReturn($vo,"json");
    }

    public function session(){
        session('name','青蛙');
        session('uid','2009');
        session('expire',30*24*60*60);
        if (session('?uid')) {
            $value = session('expire');
            echo "aaa";
            echo $value;
        }else{

        }
    }
}