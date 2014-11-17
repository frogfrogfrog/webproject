<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/11/2
 * Time: 20:35
 */

namespace Home\Controller;
use Think\Controller;
use Think\Model;

class QuestionController extends Controller{
    public function index(){
        echo $_GET['uid'];
        echo $_POST['psw'];
        echo "just test";
    }
    public function detail($pid){
        $Question = new Model('Question');
        $data = $Question->where('pid=%d',$pid)->find();
        $this->assign('questionData',$data);
//        dump($data);
        $this->display('detail');
    }
    public function dislike(){
        $pid=I('pid');
        $Question=new Model('Question');
        $Question->where('pid=%d',$pid)->setInc('opposed');
        $vo['opposed']=$Question->where('pid=%d',$pid)->getField('opposed');
        $this->ajaxReturn($vo,"json");
    }
    public function like(){
        $pid=I('pid');
        $Question=new Model('Question');
        $Question->where('pid=%d',$pid)->setInc('supported');
        $vo['supported']=$Question->where('pid=%d',$pid)->getField('supported');
        $this->ajaxReturn($vo,"json");
    }
} 