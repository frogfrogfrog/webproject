<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="zh-cn">
<?php
 session_start(); ?>

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
    <link rel="Stylesheet" type="text/css" href="/webproject/Public/css/loginDialog.css"/>

    <script type="text/javascript" src="/webproject/Public/js/jquery-2.0.2.js"></script>
    <script type="text/javascript" src="/webproject/Public/ueditor/ueditor.config.js"></script>
    <script type="text/javascript" src="/webproject/Public/ueditor/ueditor.all.min.js"></script>
    <script>
        $(function(){
            var ue = UE.getEditor('container',{
                serverUrl :"/webproject/index.php/Home/Question/ueditor"
            });
        })
    </script>



</head>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!--<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>-->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/webproject/Public/js/bootstrap.min.js"></script>
<!--<script type="text/javascript" src="/webproject/Public/js/default.js"></script>-->

<body background="/webproject/Public/img/background.jpg">

<nav role="navigation">
    <div class="navbar navbar-inverse">
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar"
                            aria-expanded="false" aria-controls="navbar"></button>
                    <a class="navbar-brand" href="/webproject/index.php">My Quara</a>
                </div>
                <form class="navbar-form navbar-left" id="search" method="get" action="" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" id="searchText" placeholder="搜索问题">
                    </div>
                </form>
                <button class="btn btn-success" id="question" style="margin-top: 7px">提问</button>

                <ul class="nav navbar-nav navbar-right" >

                    <!--<li class="dropdown">-->
                        <!--<a class="dropdown-toggle" data-toggle="dropdown"  id="navUserInfo">-->
                        <!--<p4 style="color: #d9edf7" id="navNickname" uid=""></p4>-->
                        <!--<b class="caret" id="caret"></b>-->
                        <!--<ul class="dropdown-menu">-->
                            <!--<li><a href="/user/preferences"><i class="icon-cog"></i>个人主页</a></li>-->
                            <!--<li><a hreir="/auth/logout"><i class="icon-off"></i> 退出登录</a></li>-->
                        <!--</ul>-->
                        <!--</a>-->
                    <!--</li>-->
                    <li>
                        <a id="navSignup">注册</a>
                    </li>
                    <li>
                        <a id="navLogin">登录</a>
                    </li>

                    <li>
                        <a class="glyphicon glyphicon-user" uid="" id="navUserInfo"></a>
                    </li>

                    <li>
                        <a class="glyphicon glyphicon-off" id="navOff">注销</a>
                    </li>
                </ul>


            </div>
        </nav>
    </div>
</nav>

<div id="LoginBox">
    <div class="row1">
        登录DIY账号窗口<a href="javascript:void(0)" title="关闭窗口" class="close_btn" id="closeLoginBox">×</a>
    </div>
    <div class="row"></div>
    <form id="login" class="form-horizontal" role="form" style="margin-left: 20px;margin-right: 30px;padding-top: 10px">
        <div class="form-group">
            <label for="loginUid" class="col-sm-2 control-label">帐号</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="loginUid" placeholder="yzx12" required>
            </div>
        </div>
        <div class="form-group">
            <label for="loginPsw" class="col-sm-2 control-label">密码</label>
            <div class="col-sm-10">
                <input type="password" class="form-control" id="loginPsw" placeholder="********" required>
            </div>
        </div>
        <!--<div class="form-group">-->
            <!--<div class="col-sm-offset-2 col-sm-10">-->
                <!--<div class="checkbox">-->
                    <!--<label>-->
                        <!--<input type="checkbox"> 记住密码-->
                    <!--</label>-->
                <!--</div>-->
            <!--</div>-->
        <!--</div>-->

        <div class="control-group">
            <label class="control-label" id="loginError" style="color: red"></label>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">登录</button>
            </div>
        </div>
    </form>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-7 col-md-7 col-sm-offset-1">

            <div class="well">

                <form role="form" id="postQuestion" action="/webproject/index.php/Home/Question/submitQuestion" method="post" onsubmit="return mySubmit(true)">
                    <h5>
                        请输入问题的标题
                    </h5>
                        <textarea class="form-control" id="questionTitle" name="questionTitle" cols="60" rows="2"></textarea>
                    <h5>
                        请输入问题的主要内容
                    </h5>
                    <div class="form-group">
                        <script id="container" name="content" type="text/plain">
                        </script>
                    </div>
                    <input type="hidden" id="questionContent" name="questionContent" value="">
                    <input type="hidden" id="questionUid" name="questionUid" value="">
                    <div class="form-group">
                        <input type="text" id="labelToBeAdd" class="input-medium" placeholder="输入问题的标签" style="margin-left: 5px">
                        <button type="button" id="addLabel" class="btn">添加标签</button>
                    </div>

                    <div class="form-group" >
                        <p id="labelContainer"></p>
                    </div>

                    <div class="form-group">
                        <button  type="submit" class="btn btn-primary"><i class="fa fa-reply"></i>提交</button>
                    </div>

                </form>
                <h4 id="commentError" style="color: #ff0000"></h4>

            </div>

        </div>
        <div class="col-sm-3 col-md-3">

            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">热门话题 <a href="" style="margin-left: 120px">更多></a>
                </div>
                <!-- List group -->
                <ul class="list-group">
                    <li class="list-group-item">java</li>
                    <li class="list-group-item">C++</li>
                    <li class="list-group-item">Python</li>
                    <li class="list-group-item">PHP</li>
                    <li class="list-group-item">HTML5</li>
                </ul>
            </div>

            <div class="panel panel-success">
                <!-- Default panel contents -->
                <div class="panel-heading">热门用户 <a href="" style="margin-left: 120px">更多></a>
                </div>

                <!-- List group -->
                <ul class="list-group">
                    <li class="list-group-item">Cras justo odio</li>
                    <li class="list-group-item">Dapibus ac facilisis in</li>
                    <li class="list-group-item">Morbi leo risus</li>
                    <li class="list-group-item">Porta ac consectetur ac</li>
                    <li class="list-group-item">Vestibulum at eros</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<footer role="contentinfo" class="page-footer">
    <hr>
    <p>
        Copyright &copy; 2014 - Balazs Kutil -
            <span class="credit">
                Powered by
                <a href="http://octopress.org">yzx12</a>
            </span>
    </p>

</footer>


<script type="text/javascript" src="/webproject/Public/js/default.js"></script>


<script type="text/javascript">
    var root="/webproject";
    var labelNum=0;
    $("#addLabel").bind("click",function(){
        var labelName=$("#labelToBeAdd").val();
        if(labelName!=""){
            $("#labelContainer").append("<span style='font-size: 18px;height: 40px;width: 4px;margin-right: 8px' class=\"label label-default\">"+labelName+"</span>");
            $("#labelToBeAdd").val("");
            $("#postQuestion").append("<input type='hidden' name='labelList[]' value="+labelName+">")
        }else{
            $("#commentError").html("请输入一个有效的标签名");
        }

    });

    $(document).ready(function () {
        function mySubmit(flag){
            return flag;
        }
        $("#postQuestion").submit(function(){
            var title=$("#questionTitle").val();
            var content=UE.getEditor('container').getContent();
            var labelSize=$(".label").size();
            if(title!=""){
                if(content!=""){
                    if(labelSize>0){
                        var uid=$("#navUserInfo").attr("uid");
                        $("#questionUid").val(uid);
                        $("#questionContent").val(content);
                        return mySubmit(true);
                    }else{
                        $("#commentError").html("请为问题添加至少一个标签");
                        return mySubmit(false);
                    }
                }else{
                    $("#commentError").html("问题的内容不能为空");
                    return mySubmit(false);
                }
            }else{
                $("#commentError").html("问题的标题不能为空");
                return mySubmit(false);
            }
        });

    });
</script>
</body>

</html>