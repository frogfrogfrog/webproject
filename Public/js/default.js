/**
 * Created by Administrator on 2014/11/29.
 */


$(document).ready(function () {
    //点击注册按钮
    $("#navSignup").bind("click",function(){
        $("#SignUpBox").fadeIn("slow");
    });


    //关闭登录弹出层
    $("#closeSignupBox").hover(function () { $(this).css({ color: 'black' }) }, function () { $(this).css({ color: '#999' }) }).on('click', function () {
        $("#SignUpBox").fadeOut("fast");
        $("#mask").css({ display: 'none' });
    });



    //点击登录按钮
    $("#navLogin").bind("click",function(){
        $("#LoginBox").fadeIn("slow");
    });

    //关闭登录弹出层
    $("#closeLoginBox").hover(function () { $(this).css({ color: 'black' }) }, function () { $(this).css({ color: '#999' }) }).on('click', function () {
        $("#LoginBox").fadeOut("fast");
        $("#mask").css({ display: 'none' });
    });

    $("#navOff").bind("click",function(){
        $.ajax({
            type: 'POST',
            url: root + "/index.php/Home/Login/logout",
            data: {},
            dataType: 'json',
            success: function (data) {
                $("#navUserInfo").hide();
                $("#navOff").hide();
                $("#navLogin").show();
                $("#navSignup").show();
                refresh();
            },
            error: function () {
                alert("出现错误了");
            }
        });

    });


    //首次进入页面，判断是否已经登录
    $.ajax({
        type: 'POST',
        url: root + "/index.php/Home/Login/loginCheck",
        data: {},
        dataType: 'json',
        success: function (data) {
            if (data['status'] == 1) {
                $("#navUserInfo").show();
                $("#navUserInfo").html(data['name']);
                $("#navUserInfo").attr("uid", data['uid']);
                $("#navOff").show();
                $("#navLogin").hide();
                $("#navSignup").hide();

            } else {
                $("#navUserInfo").hide();
                $("#navOff").hide();

            }
        },
        error: function () {
            alert("出现错误了");
        }
    });

    //点击查看个人详细信息
    $("#navUserInfo").bind("click",function(){
        var uid=$("#navUserInfo").attr("uid");
        location.href=root+"/index.php/Home/User/info/uid/"+uid;
    });


    //搜索功能
    $("#search").keyup(function (event) {
        var q = $("#searchText").val();
        if (q === "") {
            event.preventDefault();
        } else {
            if (event.keyCode == 13) {
                var action = root + "/index.php/Home/Search/index/q/";
                action = action + q;
                $("#search").attr("action", action);
                $("#search").submit();
            } else {
                event.preventDefault();
            }
        }

    });


    //提交注册请求
    $("#signup").submit(function (event) {
        var uid = $("#signupUid").val();
        var psw = $("#signupPsw1").val();
        var name = $("#signupNickname").val();
        event.preventDefault();
        var mythis = $("#signupModal");
        $.ajax({
            type: 'POST',
            url: root + "/index.php/Home/Login/signUp",
            data: {uid: uid, psw: psw, nickname: name},
            dataType: 'json',
            success: function (data) {
                if (data['status'] == 0) {
                    $("#signupError").html("用户名已经被占用");
                } else {
                    $("#navNickname").html(name);
                    $("#navNickname").attr("uid", uid);
                    $("#navLogin").hide();
                    $("#navSignup").hide();
                }
            },
            error: function () {
                alert("出现错误了");
            }

        })


    });

    //提交登录请求
    $("#login").submit(function (event) {
        event.preventDefault();
        $.ajax({
            type: 'POST',
            url: root + "/index.php/Home/Login/login",
            data: {uid: $("#loginUid").val(), psw: $("#loginPsw").val()},
            dataType: 'json',
            success: function (data) {
                if (data['uidCheck'] == 0) {
                    $("#loginError").html("不存在该用户");
                }
                else if (data['uidCheck'] == 1 && data['pswCheck'] == 1) {
                    $("#LoginBox").fadeOut("fast");
                    $("#navUserInfo").show();
                    $("#navUserInfo").html(data['nickname']);
                    $("#navUserInfo").attr("uid", data['uid']);
                    $("#navOff").show();
                    $("#navLogin").hide();
                    $("#navSignup").hide();
                    refresh();
                    cookie('uid', data['uid'], 30 * 24 * 60 * 60);
                    cookie('name', data['nickname'], 30 * 24 * 60 * 60);
                } else {
                    $("#loginError").html("密码错误");
                }

            },
            error: function () {
                alert("登录出现意外错误！");
            }
        })


    });

    //判断当前是否是问题详细信息界面，如果是，要刷新界面
    function refresh(){
        var reg=/Home\/Question\/Detail/i;
        if(location.href.match(reg)){
            location.reload();
        }
    }


    //提问功能
    $("#question").bind("click", function () {
        $.ajax({
            type: 'POST',
            url: root + "/index.php/Home/Login/loginCheck",
            data: {},
            dataType: 'json',
            success: function (data) {
                if (data['status'] == 1) {
                    location.href=root+"/index.php/Home/Question/postQuestion";

                } else {
                    $("#LoginBox").fadeIn("slow");
                }
            },
            error: function () {
                alert("出现错误了");
            }
        })
    });




});




