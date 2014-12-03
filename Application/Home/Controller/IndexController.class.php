<?php
namespace Home\Controller;

use Think\Controller;
use Think\Model;

class IndexController extends Controller{
    public function index($type="newest"){
        $Question = new Model('question');
        $questionType=0;
        if($type=="newest"){
            $data = $Question->order('time desc')->select();
        }else if($type=="hottest"){
            $questionType=1;
            $data = $Question->order('supported desc')->select();
        }else if($type=="unsolved"){
            $questionType=2;
            $data = $Question->order('hasAsw,time')->select();
        }
        $sizeOfData=sizeof($data);
        $Tag=M('Tag');
        for($i=0;$i<$sizeOfData;$i++){
            $data[$i]['tagList']=$Tag->Where('qid=%d',$data[$i]['qid'])->getField("tagname",true);
        }
        $Topic=new TopicController();
        $hottestTopic=$Topic->getHottestTopic();
        $this->assign("hottestTopic",$hottestTopic);

        $User=new UserController();
        $hottestUser=$User->getHottestUser();
        $this->assign("hottestUser",$hottestUser);

        $this->assign('questionType',$questionType);
        $this->assign('problemData', $data);
        $this->display("index");
    }
}