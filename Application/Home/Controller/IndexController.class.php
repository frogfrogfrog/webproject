<?php
namespace Home\Controller;

use Think\Controller;
use Think\Model;

class IndexController extends Controller{
    public function index($type="newest"){
        $Question = new Model('question');
        if($type=="newest"){
            $data = $Question->order('time desc')->select();
        }else if($type=="newest"){
            $data = $Question->order('supported desc')->select();
        }else if($type=="unsolved"){
            $data = $Question->order('hasAsw desc,time asc')->select();
        }
        $sizeOfData=sizeof($data);
        $Tag=M('Tag');
        for($i=0;$i<$sizeOfData;$i++){
            $data[$i]['tagList']=$Tag->Where('qid=%d',$data[$i]['qid'])->getField("tagname",true);
        }
        $this->assign('problemData', $data);
        $this->display("index");
    }
}