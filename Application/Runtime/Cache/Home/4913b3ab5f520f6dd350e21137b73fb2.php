<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
<script src="http://cdn.bootcss.com/jquery/1.11.1/jquery.min.js"></script>

<form action="/Student/insert" method="post">
    <div>学号：<input type="text" name="sno" id="sno" onblur="validateSno()"/><span id="info"></span></div>
    <div>姓名：<input type="text" name="sname"/></div>
    <div>年龄：<input type="text" name="sage"/></div>
    <div>性别： <input type="radio" name="sgender" value="F"/>F <input type="radio" name="sgender" value="M"/>M</div>
    <div><input type="submit" value="提交"/></div>
</form>
<script type="text/javascript">

    function validateSno() {
        $.post("index.php/Home/Login/loginCheck", {sno: $("#sno").val()}, function (returnedData, status) {
            var result = returnedData;
            if (result != null) {
                $("#info").html("<font color=red>" + result + "</font>");
            } else {
                $("#info").html("");
            }
        });
    }


</script>
</body>
</html>