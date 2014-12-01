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
        $this->assign('questionData',$data);

        $Comment=new Model("Comment");
        $commentList=$Comment->where('qid=%d',$qid)->select();
        $this->assign("commentList",$commentList);

        $commentSize=sizeof($commentList);
        $this->assign("commentSize",$commentSize);

        $this->display('detail');
    }
    public function dislike(){
        $qid=I('qid');
        $Question=new Model('Question');
        $Question->where('qid=%d',$qid)->setInc('opposed');
        $vo['opposed']=$Question->where('qid=%d',$qid)->getField('opposed');
        $this->ajaxReturn($vo,"json");
    }
    public function like(){
        $qid=I('qid');
        $Question=new Model('Question');
        $Question->where('qid=%d',$qid)->setInc('supported');
        $vo['supported']=$Question->where('qid=%d',$qid)->getField('supported');
        $this->ajaxReturn($vo,"json");
    }

    //发布问题页面
    public function postQuestion(){
        $this->display("PostQuestion");
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
//        dump($_POST['comment']);
//        dump($_POST['commentQid']);
//        dump($_POST['commentUid']);
        $Comment=M('Comment');
        $commentInfo['title']=$_POST['commentTitle'];
        $commentInfo['comment']=$_POST['comment'];
        $commentInfo['qid']=$_POST['commentQid'];
        $commentInfo['uid']=$_POST['commentUid'];
        $commentInfo['supported']=0;
        $result = $Comment->data($commentInfo)->add();
        if(!$result){
            echo "出错了";
        }else{
            $this->success("评论成功");
        }
    }



} 