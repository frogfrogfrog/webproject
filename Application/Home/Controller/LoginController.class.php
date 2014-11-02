<?php
/**
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2014/11/2
 * Time: 20:35
 */

namespace Home\Controller;
use Think\Controller;

class LoginController extends Controller{
    public function index(){
        echo $_GET['uid'];
        echo $_POST['psw'];
        echo "just test";
    }
    public function hello(){
        echo "xxx";
    }
} 