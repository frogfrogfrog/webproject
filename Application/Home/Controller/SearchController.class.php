<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/11/29
 * Time: 16:10
 */

namespace Home\Controller;
use Think\Controller;
use Think\Model;


class SearchController extends Controller{
    public function index($q=""){
//
        $Question=new Model('Question');
        $map['title']=array('like', '%'.$q.'%');
        $questionList=$Question->where($map)->select();
        $this->assign('questionList',$questionList);

        $User=new Model('User');
        $map1['uid']  = array('like', '%'.$q.'%');
        $map1['nickname']  = array('like','%'.$q.'%');
        $map1['_logic'] = 'or';
        $userList=$User->where($map1)->select();
        $this->assign('userList',$userList);

//        dump($userList);
        $this->display('SearchResult');


    }
} 