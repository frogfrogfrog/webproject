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
            <div class="panel panel-default">
                <ul class="list-group">
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-1">
                                <img class="media-object" src="/webproject/Public/img/head.png" style="height: 50px;width: 50px">
                            </div>
                            <div class="col-sm-11">
                                <p>
                                    <span class="label label-info">java</span>
                                    <span class="label label-info">python</span>
                                    <span class="label label-info">编程</span>
                                    <span class="label label-info">算法</span>
                                </p>

                                <h4 class="media-heading" id="title"><?php echo ($questionData["title"]); ?></h4>
                            </div>

                        </div>
                    </li>
                    <li class="list-group-item"><?php echo ($questionData["content"]); ?>
                    </li>
                    <li class="list-group-item">
                        <div class="row">
                            <div class="col-sm-12 col-md-12">
                                <br>

                                <p>
                                    <span class="glyphicon glyphicon-user"></span>by <a href="#">Bhaumik</a>
                                    <span class="glyphicon glyphicon-calendar"></span><?php echo ($questionData["time"]); ?> |

                                    <span id="like" qid=<?php echo ($questionData["qid"]); ?> class="glyphicon glyphicon-thumbs-up"></span>
                                    <span id="like-count"><?php echo ($questionData["supported"]); ?></span>
                                    |
                                    <span id=dislike1 qid=<?php echo ($questionData["qid"]); ?> class="glyphicon glyphicon-thumbs-down"></span>
                                    <span id="dislike1-count"><?php echo ($questionData["opposed"]); ?></span>
                                </p>
                            </div>

                        </div>
                    </li>
                </ul>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading">回复数量:<?php echo ($commentSize); ?></div>
                <ul class="list-group">
                    <?php if(is_array($commentList)): foreach($commentList as $key=>$vo): ?><li class="list-group-item">
                            <div class="row">
                                <div class="col-sm-1">
                                    <img class="media-object" src="/webproject/Public/img/head.png" style="height: 50px;width: 50px">
                                </div>
                                <div class="col-sm-11">
                                    <?php echo ($vo["comment"]); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12 col-md-12 col-sm-offset-1 col-md-offset-1">
                                    <br>

                                    <p>
                                        <span class="glyphicon glyphicon-calendar"></span>Sept 16th, 2012 |
                                        <span class="glyphicon glyphicon-comment"></span> <a href="#">3 Comments</a> |

                                        <span id="like11" class="glyphicon glyphicon-thumbs-up"></span>
                                        <span id="like1-count1"></span>
                                        |
                                        <span id="dislike11" class="glyphicon glyphicon-thumbs-down"></span>
                                        <span id="dislike1-count1"></span>
                                    </p>
                                </div>
                            </div>
                        </li><?php endforeach; endif; ?>
                </ul>
            </div>

            <div class="well">
                <h4><i class="fa fa-paper-plane-o"></i>回复：</h4>
                <form role="form" id="postComment" action="/webproject/index.php/Home/Question/postComment" method="post" onsubmit="return mySubmit(true)">
                    <div class="form-group">
                        <script id="container" name="content" type="text/plain">
                        </script>
                    </div>
                    <input type="hidden" id="comment" name="comment" value="">
                    <input type="hidden" id="commentQid" name="commentQid" value="">
                    <input type="hidden" id="commentUid" name="commentUid" value="">
                    <input type="hidden" id="commentTitle" name="commentTitle" value="">
                    <button  type="submit" class="btn btn-primary"><i class="fa fa-reply"></i>提交</button>
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

    $(document).ready(function () {
        function mySubmit(flag){
            return flag;
        }
        $("#postComment").submit(function(){
            var comment=UE.getEditor('container').getContent();
            if(comment!=""){
                var title=$("#title").html();
                var uid=$("#navUserInfo").attr("uid");
                var qid=$("#like").attr("qid");
                $("#commentUid").val(uid);
                $("#commentTitle").val(title);
                $("#commentQid").val(qid);
                $("#comment").val(comment);
                return mySubmit(true);
            }else{
                $("#commentError").html("回复内容不能为空");
                return mySubmit(false);
            }
        });



        $("#navSignup").bind("click",function(){
            $('#loginModal').modal('show');
        });
        //点赞功能

        $(".glyphicon-thumbs-up").bind("click", function () {
            var mythis = $(this);
            $.ajax({
                type: 'POST',
                url: "/webproject/index.php/Home/Question/like",
                data: {qid: $(this).attr('qid')},
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
                url: "/webproject/index.php/Home/Question/dislike",
                data: {qid: $(this).attr('qid')},
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



</body>




</html>