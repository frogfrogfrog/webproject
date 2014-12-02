<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/11/30
 * Time: 14:20
 */

namespace Home\Controller;
use Think\Controller;
use Think\Model;


class UserController extends Controller{
    public function info($uid){
        $User = M("User");
        $userInfo=$User->Where('uid=%d',$uid)->find();
        $Question=M("Question");
        $questionList=$Question->Where('uid=%d',$uid)->select();
        $this->assign('userInfo',$userInfo);
        $this->assign('questionList',$questionList);
        $questionNum=sizeof($questionList);
        $this->assign('questionNum',$questionNum);

        $Comment=M("Comment");
        $commentList=$Comment->Where('uid=%d',$uid)->select();
        $this->assign('commentList',$commentList);

        $commentNum=sizeof($commentList);
        $this->assign('commentNum',$commentNum);
        $this->display("PersonalInfo");
    }

    public function getHottestUser(){
        $User=M('User');
        $hottestUser=$User->field('uid,nickname,credit')->order('credit desc')->limit(5)->select;
        return $hottestUser;
    }
} 