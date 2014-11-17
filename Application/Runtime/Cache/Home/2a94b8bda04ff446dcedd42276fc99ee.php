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

</head>

<body background="background.jpg">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>

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


                </form>
                <button class="btn btn-success" id="question" style="margin-top: 7px">提问</button>

                <ul class="nav navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" id="navUserInfo">
                        <p4 style="color: #d9edf7" id="navNickname" uid=""></p4>
                        <b
                                class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <li><a href="/user/preferences"><i class="icon-cog"></i> Preferences</a></li>
                            <li><a href="/help/support"><i class="icon-envelope"></i> Contact Support</a></li>
                            <li class="divider"></li>
                            <li><a href="/auth/logout"><i class="icon-off"></i> Logout</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#signup" data-toggle="modal" data-target="#signupModal" id="navSignup">注册</a>
                    </li>
                    <li>
                        <a href="#login" data-toggle="modal" data-target="#loginModal" id="navLogin">登录</a>
                    </li>
                </ul>


            </div>
        </nav>
    </div>
</nav>
<div class="modal fade" id="loginModal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" class="close" data-dismiss="modal">×</a>
                <h4>用户登录</h4>
            </div>
            <div class="modal-body">
                <form class="form-signin" role="form" method="post" id="login">
                    <div class="control-group">
                        <label class="control-label" for="loginUid">用户名:</label>

                        <div class="controls">
                            <input type="text" class="form-control" name="loginUid" id="loginUid" placeholder="yzx12" required autofocus>
                        </div>
                    </div>

                    <div class="control-group">
                        <label class="control-label" for="loginPsw" >密码:</label>

                        <div class="controls">
                            <input type="password" id="loginPsw" class="form-control" name="psw" placeholder="********"
                                   required>
                        </div>
                    </div>

                    <div class="checkbox">
                        <label>
                            <input type="checkbox" value="remember-me">记住密码</label>
                    </div>

                    <div class="control-group">
                        <label class="control-label" id="loginError" style="color: red"></label>
                    </div>
                    <button class="btn btn-lg btn-primary" type="submit">登录</button>
                </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="signupModal">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <a href="#" class="close" data-dismiss="modal">×</a>
                <h4>用户注册</h4>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" id="signup">
                    <!-- Sign Up Form -->
                    <!-- Text input-->
                    <div class="control-group">
                        <label class="control-label" for="signupUid">用户名:</label>

                        <div class="controls">
                            <input id="signupUid" class="form-control" type="text"
                                   placeholder="a_123" class="input-large" required="true"
                                   pattern="^[A-Za-z\d_]{3,12}$"
                                    title="3~12字符，允许数字、字母、下划线">
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="control-group">
                        <label class="control-label" for="signupNickname">昵称:</label>

                        <div class="controls">
                            <input id="signupNickname" class="form-control" type="text"
                                   placeholder="JoeSixpack"
                                   class="input-large" required="true">
                        </div>
                    </div>

                    <!-- Password input-->
                    <div class="control-group">
                        <label class="control-label" for="signupPsw1" >密码:</label>

                        <div class="controls">
                            <input id="signupPsw1"  class="form-control" type="password"
                                   placeholder="********" class="input-large" required="true"
                                   onchange="checkPasswords()">
                        </div>
                    </div>

                    <!-- Text input-->
                    <div class="control-group">
                        <label class="control-label" for="signupPsw2">确认密码:</label>


                        <div class="controls">
                            <input id="signupPsw2" class="form-control"  type="password"
                                   placeholder="********" class="input-large" required="true"
                                   onchange="checkPasswords()">
                        </div>


                    </div>
                    <div class="control-group">
                        <label class="control-label" id="signupError" style="color: red"></label>
                    </div>

                    <!-- Multiple Radios (inline) -->
                    <!-- Button -->
                    <div class="control-group">
                        <label class="control-label" for="signupConfirm"></label>

                        <div class="controls">
                            <button id="signupConfirm" class="btn btn-success">注册</button>
                        </div>
                    </div>

                </form>
                <script>
                    function checkPasswords() {
                        var pass1 = document.getElementById("signupPsw1");
                        var pass2 = document.getElementById("signupPsw2");
                        if (pass1.value != pass2.value)
                            pass1.setCustomValidity("两次密码必须输入一致！");
                        else
                            pass1.setCustomValidity('');
                    }
                </script>
            </div>

            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-sm-8 col-md-8">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <div class="panel-heading">
                    <ul class="nav nav-tabs" role="tablist">
                        <li role="presentation" class="active"><a href="#">最新</a>
                        </li>
                        <li role="presentation"><a href="#">热门</a>
                        </li>
                        <li role="presentation"><a href="#">推荐</a>
                        </li>
                    </ul>
                </div>
                <!-- List group -->
                <ul class="list-group">
                    <?php if(is_array($problemData)): foreach($problemData as $key=>$vo): ?><li class="list-group-item">
                            <div class="row">
                                <div class="col-sm-1">
                                    <img class="media-object" src="/webproject/Public/img/head.png"
                                         style="height: 50px;width: 50px">
                                </div>
                                <div class="col-sm-11">
                                    <p>
                                        <span class="label label-info">java</span>
                                        <span class="label label-info">python</span>
                                        <span class="label label-info">编程</span>
                                        <span class="label label-info">算法</span>
                                    </p>
                                    <a href="/webproject/index.php/Home/Question/Detail/pid/<?php echo ($vo["pid"]); ?>">
                                        <h4 class="media-heading"><?php echo ($vo["title"]); ?></h4>
                                    </a>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-sm-offset-1 col-md-offset-1">
                                        <br>

                                        <p>
                                            <span class="glyphicon glyphicon-calendar"></span>Sept 16th, 2012 |
                                            <span class="glyphicon glyphicon-comment"></span> <a href="#">3 Comments</a>
                                            |

                                            <span id="like1" pid=<?php echo ($vo["pid"]); ?> class="glyphicon glyphicon-thumbs-up"></span>
                                            <span id="like1-count"><?php echo ($vo["supported"]); ?></span>
                                            |
                                            <span id=dislike1 pid=<?php echo ($vo["pid"]); ?>
                                                  class="glyphicon glyphicon-thumbs-down"></span>
                                            <span id="dislike1-count"><?php echo ($vo["opposed"]); ?></span>
                                        </p>
                                    </div>

                                </div>
                            </div>
                            <div class="row"></div>
                        </li><?php endforeach; endif; ?>
                </ul>
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
                <a href="http://octopress.org">Octopress</a>
            </span>
    </p>

</footer>

<script type="text/javascript">
    $(document).ready(function () {
        $.ajax({
            type: 'POST',
            url: "index.php/Home/Login/loginCheck",
            data: {},
            dataType: 'json',
            success: function (data) {
                if(data['status']==1){
                    $("#navLogin").hide();
                    $("#navSignup").hide();
                    $("#navUserInfo").show();
                    $("#navUserInfo").html(data['name']);
                }else{
                    $("#navUserInfo").hide();
                }
            },
            error: function () {
                alert("出现错误了");
            }

        })
//        $.post("index.php/Home/Login/loginCheck", function (returnedData, status) {
//            var result = returnedData;
//
//        });
    });

</script>
<script type="text/javascript">
    //注册功能
    $(document).ready(function () {
        $("#signup").submit(function (event) {
            var uid = $("#signupUid").val();
            var psw = $("#signupPsw1").val();
            var name=$("#signupNickname").val();
            event.preventDefault();
            var mythis=$("#signupModal");
            $.ajax({
                type: 'POST',
                url: "index.php/Home/Login/signUp",
                data: {uid:uid,psw:psw,nickname:name},
                dataType: 'json',
                success: function (data) {
                    if(data['status']==0){
                        $("#signupError").html("用户名已经被占用");
                    }else{
                        $("#signupModal").modal('hide');
                        $("#navNickname").html(name);
                        $("#navNickname").attr("uid",uid);
                        $("#navLogin").hide();
                        $("#navSignup").hide();
                    }
                },
                error: function () {
                    alert("出现错误了");
                }

            })



        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        //点赞功能
        $(".glyphicon-thumbs-up").bind("click", function () {
            var mythis = $(this);
            $.ajax({
                type: 'POST',
                url: "index.php/Home/Question/like",
                data: {pid: $(this).attr('pid')},
                dataType: 'json',
                success: function (data) {
                    mythis.next().html(data['supported']);
                },
                error: function () {
                    alert("出现错误了");
                }
            })
        });

        $(".glyphicon-thumbs-down").bind("click", function () {
            var mythis = $(this);
            $.ajax({
                type: 'POST',
                url: "index.php/Home/Question/dislike",
                data: {pid: $(this).attr('pid')},
                dataType: 'json',
                success: function (data) {
                    mythis.next().html(data['opposed']);
                },
                error: function () {
                    alert("出现错误了");
                }
            })
        });

    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        $("#question").bind("click", function () {
            $.post("index.php/Home/Login/loginCheck", function (returnedData, status) {
                var result = returnedData;
                if (result === 1) {
                    alert("已经登录了");
                } else {
                    $('#login').modal('show');
                }
            });
        });
    });
</script>

<script type="text/javascript">
    $(document).ready(function () {
        //用户登录
        $("#login").submit(function (event) {
            event.preventDefault();
            $.ajax({
                type: 'POST',
                url: "index.php/Home/Login/login",
                data: {uid: $("#loginUid").val(),psw:$("#loginPsw").val()},
                dataType: 'json',
                success: function (data) {
                    if(data['uidCheck']==0){
                        $("#loginError").html("不存在该用户");
                    }
                    else if(data['uidCheck']==1 && data['pswCheck']==1){
                        $("#loginModal").modal('hide');
                        $("#navUserInfo").show();
                        $("#navNickname").html(data['nickname']);
                        $("#navNickname").attr("uid",data['uid']);
                        $("#navLogin").hide();
                        $("#navSignup").hide();
                        cookie('uid',data['uid'],30*24*60*60);
                        cookie('name',data['nickname'],30*24*60*60);
                    }else{
                        $("#loginError").html("密码错误");
                    }

                },
                error: function () {
                    alert("登录出现意外错误！");
                }
            })


        });
    });
</script>
</body>

</html>