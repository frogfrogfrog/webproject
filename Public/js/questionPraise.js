/**
 * Created by Administrator on 2014/12/2.
 */

$(document).ready(function () {
    //点赞功能
    $(".questionPraise").bind("click", function () {
        var mythis = $(this);
        var uid=$("#navUserInfo").attr("uid");
        if(uid==""){
            $("#LoginBox").fadeIn("slow");
        }else{
            $.ajax({
                type: 'POST',
                url: root+"/index.php/Home/Question/like",
                data: {qid: $(this).attr('qid'),uid:uid},
                dataType: 'json',
                success: function (data) {
                    if(data['supported']==0){
                        mythis.css("color","");
                        mythis.next().html("赞("+data['supported']+")");
                    }else{
                        mythis.css("color","red");
                        mythis.next().html("赞("+data['supported']+")");
                    }
                },
                error: function () {
                    alert("出现错误了");
                }
            });
        }

    });
});