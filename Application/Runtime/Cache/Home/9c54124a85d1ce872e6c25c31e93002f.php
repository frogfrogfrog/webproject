<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>homepage</title>
    <!-- 新 Bootstrap 核心 CSS 文件 -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- 可选的Bootstrap主题文件（一般不用引入） -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body background="background.jpg">

<nav role="navigation">
    <div class="navbar navbar-inverse">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                            aria-expanded="false" aria-controls="navbar"></button>
                    <a class="navbar-brand" href="#">My Quara</a>
                </div>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="搜索问题">
                    </div>
                    <button type="submit" class="btn btn-success">提问</button>
                </form>

                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#signup" data-toggle="modal" data-target="#signup">注册</a>
                    </li>
                </ul>

                <ul class="nav navbar-nav navbar-right">
                    <li>
                        <a href="#login" data-toggle="modal" data-target="#login">登录</a>

                    </li>
                </ul>
            </div>
        </nav>
    </div>
</nav>
<div class="modal fade" id="login">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" class="close" data-dismiss="modal">×</a>
                <h4>用户登录</h4>
            </div>
            <div class="modal-body">
                <form class="form-signin" role="form" action="index.php/Home/Login">
                    <input type="email" class="form-control" name="uid" id="uid" placeholder="用户名" required autofocus>
                    <input type="password" class="form-control" name="psw" placeholder="密码" required>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me">记住密码</label>
                    </div>
                    <button class="btn btn-lg btn-primary" type="submit">登录</button>
                </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="signup">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" class="close" data-dismiss="modal">×</a>
                <h4>用户注册</h4>
            </div>
            <div class="modal-body">
                <form class="form-signin" role="form">
                    <input type="email" class="form-control" placeholder="用户名" required autofocus>
                    <input type="password" class="form-control" placeholder="密码" required>
                    <input type="password" class="form-control" placeholder="再次输入密码" required>
                </form>
            </div>
            <div class="modal-footer">
                <button class="btn btn-lg btn-primary" type="submit">注册</button>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-8 col-md-8">
            <div class="panel panel-default">
                <!-- Default panel contents -->

                <!-- List group -->
                <ul class="list-group">
                    <li class="list-group-item">
                        <ul class="nav nav-tabs" role="tablist">
                            <li role="presentation" class="active"><a href="#">提问</a>
                            </li>
                            <li role="presentation"><a href="#">回答</a>
                            </li>
                        </ul>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-1">
                                <img class="media-object" src="head.png" style="height: 50px;width: 50px">
                            </div>
                            <div class="col-sm-11">
                                <p>
                                    <span class="label label-info">java</span>
                                    <span class="label label-info">python</span>
                                    <span class="label label-info">编程</span>
                                    <span class="label label-info">算法</span>
                                </p>
                                <a href="#detail">
                                    <h4 class="media-heading">php订单号方案，重复的可能性要很低很低很低，大家说说自己的方案。</h4>
                                </a>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-sm-offset-1 col-md-offset-1">
                                    <br>
                                    <p>
                                        <span class="glyphicon glyphicon-calendar"></span>Sept 16th, 2012 |
                                        <span class="glyphicon glyphicon-comment"></span> <a href="#">3 Comments</a> |

                                        <span id="like1" class="glyphicon glyphicon-thumbs-up"></span>
                                        <span id="like1-count"></span>
                                        |
                                        <span id="dislike1" class="glyphicon glyphicon-thumbs-down"></span>
                                        <span id="dislike1-count"></span>
                                    </p>
                                </div>

                            </div>
                        </div>
                        <div class="row"></div>
                    </li>

                </ul>
            </div>
        </div>
        <div class="col-sm-3 col-md-3">

            <div class="panel panel-default">
                <!-- Default panel contents -->
                <!-- List group -->
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-1">
                                <img class="media-object" src="head.png" style="height: 50px;width: 50px">
                            </div>
                            <div class="col-sm-8 col-sm-offset-1">
                                <h4>那是青蛙啊</h4>
                            </div>
                        </div>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <p>&nbsp;&nbsp;&nbsp;
                                <span class="glyphicon glyphicon-star">积分：20 &nbsp;</span>
                                <span class="glyphicon glyphicon-thumbs-up">赞同：20</span>
                            </p>

                        </div>
                    </li>
                </ul>
            </div>
            <div class="panel panel-default">
                <ul class="list-group">
                    <li class="list-group-item">
                        <p class="text-nowrap">
                            <small>统计信息</small>
                        </p>
                    </li>
                    <li class="list-group-item">
                        <ul>
                            <li>问题数：20</li>
                            <li>评论数：100</li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>


<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

</body>

</html>