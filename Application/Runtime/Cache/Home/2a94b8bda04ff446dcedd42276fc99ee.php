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

<body background="a.jpg">

    <nav role="navigation">
        <div class="navbar navbar-inverse">
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar"></button>
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
                <div class="modal-body" >
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
    $(document).ready(function() {
        $('span.glyphicon-thumbs-up, span.glyphicon-thumbs-down').click(function() {
            var $this = $(this),
                c = $this.data('count');
            if (!c) c = 0;
            c++;
            $this.data('count', c);
            $('#' + this.id + '-count').html(c);
        });
        $(document).delegate('*[data-toggle="lightbox"]', 'click', function(event) {
            event.preventDefault();
            $(this).ekkoLightbox();
        });
    });
    </script>

    <script type="text/javascript">
    var disqus_shortname = 'bootstrapthemedemo';


    var disqus_script = 'count.js';

    (function() {
        var dsq = document.createElement('script');
        dsq.type = 'text/javascript';
        dsq.async = true;
        dsq.src = 'http://' + disqus_shortname + '.disqus.com/' + disqus_script;
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    }());
    </script>

    <div id="fb-root"></div>
    <script>
    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/all.js#appId=212934732101925&xfbml=1";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    </script>

    <script type="text/javascript">
    (function() {
        var script = document.createElement('script');
        script.type = 'text/javascript';
        script.async = true;
        script.src = 'https://apis.google.com/js/plusone.js';
        var s = document.getElementsByTagName('script')[0];
        s.parentNode.insertBefore(script, s);
    })();
    </script>

    <script type="text/javascript">
    (function() {
        var twitterWidgets = document.createElement('script');
        twitterWidgets.type = 'text/javascript';
        twitterWidgets.async = true;
        twitterWidgets.src = 'http://platform.twitter.com/widgets.js';
        document.getElementsByTagName('head')[0].appendChild(twitterWidgets);
    })();
    </script>


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>