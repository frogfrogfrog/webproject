<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/12/3
 * Time: 0:47
 */

namespace Home\Controller;


class TopicController {
    public function getHottestTopic(){
        $Tag=M('Tag');
        $hottestTopic=$Tag->field('tagname,count(qid)')->group('tagname')->order('count(qid) desc')->limit(5)->select();
        return $hottestTopic;
    }
} 