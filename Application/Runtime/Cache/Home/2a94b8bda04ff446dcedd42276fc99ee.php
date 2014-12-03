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
    <link rel="stylesheet" href="/webproject/Public/css/bootstrap.min.css">

    <!-- 可选的Bootstrap主题文件（一般不用引入） -->
    <link rel="stylesheet" href="/webproject/Public/css/bootstrap-theme.min.css">

    <link rel="Stylesheet" type="text/css" href="/webproject/Public/css/loginDialog.css"/>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <!--<script src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>-->
    <!--<script src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>-->
    <!--<![endif]&ndash;&gt;-->


</head>

<body background="/webproject/Public/img/background.jpg">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type="text/javascript" src="/webproject/Public/js/jquery-2.0.2.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/webproject/Public/js/bootstrap.min.js"></script>

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


<div class="modal fade" id="warnBox" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                <h4 class="modal-title">提示</h4>
            </div>
            <div class="modal-body">
                <p id="warnMessage"></p>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>积分</th>
                        <th>每日问题上限</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td><20</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>>=20</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>>=50</td>
                        <td>3</td>
                    </tr>
                    <tr>
                        <td>>=100</td>
                        <td>5</td>
                    </tr>
                    </tbody>
                </table>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">确认</button>
            </div>
        </div>
    </div>
</div>

<div id="SignUpBox">
    <div class="row1">
        注册DIY账号窗口<a href="javascript:void(0)" title="关闭窗口" class="close_btn" id="closeSignupBox">×</a>
    </div>
    <div class="row"></div>
    <form id="signup" class="form-horizontal" role="form" style="margin-left: 20px;margin-right: 30px;padding-top: 10px">
        <div class="form-group">
            <label for="signupUid" class="col-sm-2 control-label">帐号</label>
            <div class="col-sm-10">
                <input id="signupUid" class="form-control" type="text"
                       placeholder="a_123" class="input-large" required="true"
                       pattern="^[A-Za-z\d_]{3,12}$"
                       title="3~12字符，允许数字、字母、下划线">
            </div>
        </div>
        <div class="form-group">
            <label for="signupNickname" class="col-sm-2 control-label">昵称</label>
            <div class="col-sm-10">
                <input id="signupNickname" class="form-control" type="text"
                       placeholder="JoeSixpack"
                       class="input-large" required="true">
            </div>
        </div>
        <div class="form-group">
            <label for="signupPsw1" class="col-sm-2 control-label">密码</label>
            <div class="col-sm-10">
                <div class="controls">
                    <input id="signupPsw1" class="form-control" type="password"
                           placeholder="********" class="input-large" required="true"
                           onchange="checkPasswords()">
                </div>
            </div>
        </div>
        <div class="form-group">
            <label for="signupPsw2" class="col-sm-2 control-label">密码</label>
            <div class="col-sm-10">
                <div class="controls">
                    <input id="signupPsw2" class="form-control" type="password"
                           placeholder="********" class="input-large" required="true"
                           onchange="checkPasswords()">
                </div>
            </div>
        </div>
        <div class="control-group">
            <label class="control-label" id="signupError" style="color: red"></label>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
                <button type="submit" class="btn btn-success">注册</button>
            </div>
        </div>
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
    </form>
</div>

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
        <div class="col-sm-8 col-md-8">
            <div class="panel panel-default">
                <!-- Default panel contents -->
                <!-- List group -->
                <ul class="list-group">
                    <div class="list-group-item">
                        <ul class="nav nav-tabs" role="tablist">
                            <?php if($questionType == 0): ?><li role="presentation" class="active">
                                    <a class="tabNameList" href="/webproject/index.php/Home/Index/index/type/newest">最新</a>
                                </li>
                                <?php else: ?>
                                <li role="presentation">
                                    <a class="tabNameList" href="/webproject/index.php/Home/Index/index/type/newest">最新</a>
                                </li><?php endif; ?>

                            <?php if($questionType == 1): ?><li role="presentation" class="active">
                                    <a class="tabNameList" href="/webproject/index.php/Home/Index/index/type/hottest">热门</a>
                                </li>
                                <?php else: ?>
                                <li role="presentation">
                                    <a class="tabNameList" href="/webproject/index.php/Home/Index/index/type/hottest">热门</a>
                                </li><?php endif; ?>
                            <?php if($questionType == 2): ?><li role="presentation" class="active">
                                    <a class="tabNameList" href="/webproject/index.php/Home/Index/index/type/unsolved">待解决</a>
                                </li>
                                <?php else: ?>
                                <li role="presentation">
                                    <a class="tabNameList" href="/webproject/index.php/Home/Index/index/type/unsolved">待解决</a>
                                </li><?php endif; ?>
                        </ul>
                    </div>
                    <?php if(is_array($problemData)): foreach($problemData as $key=>$vo): ?><li class="list-group-item">
                            <div class="row">
                                <div class="col-sm-1">
                                    <img class="media-object" src="/webproject/Public/img/head.png"
                                         style="height: 50px;width: 50px">
                                </div>
                                <div class="col-sm-11">
                                    <p>
                                        <?php if(is_array($vo['tagList'])): foreach($vo['tagList'] as $key=>$tag): ?><span class="label label-info" style="margin-right: 5px"><?php echo ($tag); ?></span><?php endforeach; endif; ?>
                                    </p>
                                    <a href="/webproject/index.php/Home/Question/Detail/qid/<?php echo ($vo["qid"]); ?>">
                                        <h4 class="media-heading"><?php echo ($vo["title"]); ?></h4>
                                    </a>
                                </div>
                                <div class="row">
                                    <div class="col-sm-12 col-md-12 col-sm-offset-1 col-md-offset-1">
                                        <br>

                                        <p>
                                            <span class="glyphicon glyphicon-calendar"></span><?php echo ($vo["time"]); ?> |
                                            <span class="glyphicon glyphicon-comment"></span> <a href="/webproject/index.php/Home/Question/Detail/qid/<?php echo ($vo["qid"]); ?>#postComment">回答</a>
                                            |
                                            <?php if($vo["supported"] > 0): ?><span style="color: #ff0000" qid=<?php echo ($vo["qid"]); ?> class="glyphicon glyphicon-thumbs-up questionPraise"></span>
                                                <?php else: ?>
                                                <span qid=<?php echo ($vo["qid"]); ?> class="glyphicon glyphicon-thumbs-up questionPraise"></span><?php endif; ?>
                                            <span>赞(<?php echo ($vo["supported"]); ?>)</span>
                                            <!--|-->
                                            <!--<span id=dislike1 qid=<?php echo ($vo["qid"]); ?>-->
                                                  <!--class="glyphicon glyphicon-thumbs-down"></span>-->
                                            <!--<span id="dislike1-count"><?php echo ($vo["opposed"]); ?></span>-->
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
                    <?php if(is_array($hottestTopic)): foreach($hottestTopic as $key=>$vo): ?><li class="list-group-item">
                            <a href="#"><?php echo ($vo["tagname"]); ?> <span class="badge"><?php echo ($vo['count(qid)']); ?></span></a>
                        </li><?php endforeach; endif; ?>
                </ul>
            </div>

            <div class="panel panel-success">
                <!-- Default panel contents -->
                <div class="panel-heading">热门用户 <a href="" style="margin-left: 120px">更多></a>
                </div>

                <!-- List group -->
                <ul class="list-group">
                    <?php if(is_array($hottestUser)): foreach($hottestUser as $key=>$vo): ?><li class="list-group-item">
                            <p><img class="media-object" src="/webproject/Public/img/head.png"
                                    style="height: 50px;width: 50px"><a href="/webproject/index.php/Home/User/info/uid/<?php echo ($vo["uid"]); ?>"><?php echo ($vo["nickname"]); ?></a> 积分:<?php echo ($vo["credit"]); ?></p>
                        </li><?php endforeach; endif; ?>
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

<script type="text/javascript">
    var root="/webproject";
</script>



<script type="text/javascript" src="/webproject/Public/js/default.js"></script>
<script type="text/javascript" src="/webproject/Public/js/questionPraise.js"></script>
</body>

</html>