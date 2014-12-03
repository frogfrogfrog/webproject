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
    public function detail($qid){
        $Question = new Model('Question');
        $data = $Question->where('qid=%d',$qid)->find();
        $Tag=M('Tag');
        $data['tagList']=$Tag->Where('qid=%d',$qid)->getField("tagname",true);
        $User=M('User');
        $data['nickname']=$User->Where('uid=%d',$data['uid'])->getField("nickname");
        $data['hasBest']=0;

        $Comment=new Model("Comment");
        $commentList=$Comment->where('qid=%d',$qid)->order('isBest desc,time')->select();
        $sizeOfComment=sizeof($commentList);
        for($i=0;$i<$sizeOfComment;$i++){
            $commentList[$i]['nickname']=$User->Where('uid=%d',$commentList[$i]['uid'])->getField("nickname");
            if($commentList[$i]['isBest']==1){
                $data['hasBest']=1;
            }
        }
        $this->assign('questionData',$data);
        $this->assign("commentList",$commentList);

        $commentSize=sizeof($commentList);
        $this->assign("commentSize",$commentSize);

        $this->display('detail');
    }
    public function commentPraise(){
        $cid=I('cid');
        $uid=I('uid');

        $tranDb = new Model();
        $tranDb->startTrans();

        $newRecord['cid']=$cid;
        $newRecord['uid']=$uid;
        $flagB=$tranDb->table('CommentPraise')->data($newRecord)->add();

        if($flagB){
            $flagA=$tranDb->table('Comment')->where('cid=%d',$cid)->setInc('supported',1);
        }else{
            $flagA=$tranDb->table('Comment')->where('cid=%d',$cid)->setDec('supported',1);
            $condition['cid']=$cid;
            $condition['uid']=$uid;
            $tranDb->table('CommentPraise')->where($condition)->delete();
        }
        if($flagA){
            $tranDb->commit();
            $Comment=M('Comment');
            $vo['supported']=$Comment->where('cid=%d',$cid)->getField('supported');
            $this->ajaxReturn($vo,"json");
        }else{
            $tranDb->rollback();
            $Comment=M('Comment');
            $vo['supported']=$Comment->where('cid=%d',$cid)->getField('supported');
            $this->ajaxReturn($vo,"json");
        }
    }

    public function like(){
        $qid=I('qid');
        $uid=I('uid');

        $tranDb = new Model();
        $tranDb->startTrans();


        $newRecord['qid']=$qid;
        $newRecord['uid']=$uid;
        $flagB=$tranDb->table('QuestionPraise')->data($newRecord)->add();

        if($flagB){
            $flagA=$tranDb->table('Question')->where('qid=%d',$qid)->setInc('supported',1);
        }else{
            $flagA=$tranDb->table('Question')->where('qid=%d',$qid)->setDec('supported',1);
            $condition['qid']=$qid;
            $condition['uid']=$uid;
            $tranDb->table('QuestionPraise')->where($condition)->delete();
        }
        if($flagA){
            $tranDb->commit();
            $Question=M('Question');
            $vo['supported']=$Question->where('qid=%d',$qid)->getField('supported');
            $this->ajaxReturn($vo,"json");
        }else{
            $tranDb->rollback();
            $Question=M('Question');
            $vo['supported']=$Question->where('qid=%d',$qid)->getField('supported');
            $this->ajaxReturn($vo,"json");
        }
    }

    //发布问题页面
    public function postQuestion(){
        $this->display("PostQuestion");
    }

    public function canPostQuestion(){
        $uid=I('uid');

        $t = time();
        $t1 = mktime(0,0,0,date("m",$t),date("d",$t),date("Y",$t));
        $startTime=date("Y-m-d H:i:s",$t1);

        $e1 = mktime(23,59,59,date("m",$t),date("d",$t),date("Y",$t));
        $endTime=date("Y-m-d H:i:s",$e1);

        $map['time']  = array('between',array($startTime,$endTime));
        $map['uid']=$uid;
        $Question=M('Question');
        $qidList=$Question->where($map)->getField('qid',true);

        $User=M('User');
        $credit=$User->where('uid=%d',$uid)->getField('credit');

        $num=sizeof($qidList);

        $ret['num']=$num;
        $ret['credit']=$credit;
        $ret['flag']=0;

        if($num>=1 && $credit<20){

        }elseif($num>=2 && $credit<50){

        }elseif($num>=3 && $credit<100){

        }elseif($num>=5){

        }else{
            $ret['flag']=1;
        }

        $this->ajaxReturn($ret,"json");
    }


    public function ueditor(){
        $data = new \Org\Util\Ueditor();
        echo $data->output();
    }


    public function submitQuestion(){
        $questionInfo['title']=$_POST['questionTitle'];
        $questionInfo['content']=$_POST['questionContent'];
        $questionInfo['uid']=$_POST['questionUid'];
        $questionInfo['supported']=0;
        $questionInfo['hasAsw']=0;
        $questionInfo['time']=date('y-m-d H:i:s',time());
        $tagList=$_POST['labelList'];

        $Question=M('Question');
        $qid=$Question->data($questionInfo)->add();
        if(!$qid){
            $this->error("发布问题失败了!");
        }else {
            $Tag=M('Tag');
            $tagInfo['qid']=$qid;
            foreach ($tagList as $key => $value) {
                $tagInfo['tagname']=$value;
                $result=$Tag->data($tagInfo)->add();
                if(!$result){
                    $this->error("发布问题失败了!");
                    $Question->Where('qid=%d',$qid)->delete();
                    $Tag->Where('qid=%d',$qid)->delete();
                    break;
                }
            }

            $location="detail/qid/".$qid."";
            $this->success('发布问题成功',$location,3);
        }
    }


    public function postComment(){
        $tranDb = new Model();
        $tranDb->startTrans();

        $commentInfo['title']=$_POST['commentTitle'];
        $commentInfo['comment']=$_POST['comment'];
        $commentInfo['qid']=$_POST['commentQid'];
        $commentInfo['uid']=$_POST['commentUid'];
        $commentInfo['time']=date('y-m-d H:i:s',time());
        $commentInfo['supported']=0;

        //回答一个问题，积分+5;
        $flagA=$tranDb->table("User")->where('uid=%d',$commentInfo['uid'])->setInc('credit',5);

        $flagB=$tranDb->table("Comment")->data($commentInfo)->add();


        if($flagA && $flagB){
            $tranDb->commit();
            $this->success("评论成功");
        }else{
            $tranDb->rollback();
            $this->error("出现未知错误");
        }
    }


    //选取最佳答案
    public function chooseBestAsw($cid){
        $tranDb = new Model();
        $tranDb->startTrans();

        $data['isBest']=1;
        $flagA=$tranDb->table('Comment')->where('cid=%d',$cid)->data($data)->save();

        $Comment=M('Comment');
        $qid=$Comment->where('cid=%d',$cid)->getField('qid');

        $data1['hasAsw']=1;
        $flabB=$tranDb->table('Question')->where('qid=%d',$qid)->data($data1)->save();
        if($flagA && $flabB){
            $tranDb->commit();
            $this->success("设置最佳答案成功");
        }else{
            $tranDb->rollback();
            $this->error("出现错误了");
        }
    }



} 