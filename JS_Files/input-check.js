const arr=[false,false] ;
$(document).ready(()=>{
    $("#check").click(()=>
    {
        if($("#password").attr("type") == "password")
        {
            $("#password").attr("type","text") ;
            $("#check").text("visibility");
        }
        else
        {
            $("#password").attr("type","password") ;
            $("#check").text("visibility_off");
        }
    })
    $("#user_name").blur(()=>
    {
        if ($("#user_name").val().length > 6) {
            $("#username_check").css({
                "visibility": "visible",
                "color": "green"
            });
            $("#username_check").text("check");
            $("#username_label").css("color", "green");
            arr[0] = true;
        } else {
            $("#username_check").css({
                "visibility": "visible",
                "color": "red"
            });
            $("#username_check").text("close");
            $("#username_label").css("color", "red");
            arr[0] = false;
        }
    })

    $("#password").blur(() => {
        if (/^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,16}$/.test($("#password").val())) {

            $("#password_label").css("color", "green").text("Valid Password");
            arr[1] = true;
        } else {
            $("#password_label").css("color", "red").text("Invalid Password");
            arr[1] = false;
        }
    });
});

function login_validate()
{
if(arr.every((k)=> k ))
{
    return true;
}
else
{
    return false;
}
}