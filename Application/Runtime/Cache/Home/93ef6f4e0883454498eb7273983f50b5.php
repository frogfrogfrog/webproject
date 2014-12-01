<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head>
    <title>Bootstrap 实例 - 标签页（Tab）插件</title>
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap.min.css">

    <!-- 可选的Bootstrap主题文件（一般不用引入） -->
    <link rel="stylesheet" href="http://cdn.bootcss.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
</head>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="/webproject/Public/js/bootstrap.min.js"></script>

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
<body>


<div class="well">
    <h4><i class="fa fa-paper-plane-o"></i>回复：</h4>
    <form role="form">
        <div class="form-group">
            <script id="container" name="content" type="text/plain">
    </script>
        </div>

    </form>
    <button onclick="getAllHtml()"  class="btn btn-primary"><i class="fa fa-reply"></i>提交</button>
</div>


<script type="text/javascript">
    function getAllHtml() {
        alert(UE.getEditor('container').getAllHtml())
    }
</script>



</body>
</html>