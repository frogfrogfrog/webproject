/**
 * Created by Administrator on 2014/12/1.
 */


/**
 * Created by Administrator on 2014/11/29.
 */


$(document).ready(function () {

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


                //判断用户是否为题主，如果是，提供采纳按钮
                var uid = $("#navUserInfo").attr("uid");
                var questionHolder = $(".questionPraise").attr("uid");

                if(uid==questionHolder){
                    var hasBest=$(".questionPraise").attr("hasBest");
                    if(hasBest==1){
                    }else{
                        $(".bestCommentOption").show();
                    }
                }
            } else {
                $("#navUserInfo").hide();
                $("#navOff").hide();
            }
        },
        error: function () {
            alert("出现错误了");
        }
    });

    $(".bestCommentOption").bind("click",function(){
        $("#chooseBestAswBtn").attr("cid",$(this).attr("cid"));
        $("#confirmBox").modal('show');
    });

    $("#chooseBestAswBtn").bind("click",function(){
        var site=root+"/index.php/Home/Question/chooseBestAsw/cid/"+$(this).attr("cid");
        location.href=site;
    });
});






