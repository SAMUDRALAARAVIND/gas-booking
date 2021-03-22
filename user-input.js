$(document).ready(() => {
        $("#user_name").blur(() => {
                // console.log($("#user_name").val().length) ;
                if ($("#user_name").val().length > 6) {
                    $("#username_check").css({
                        "visibility": "visible",
                        "color": "green"
                    });
                    $("#username_check").text("check");
                    $("#username_label").css("color", "green");
                } else {
                    $("#username_check").css({
                        "visibility": "visible",
                        "color": "red"
                    });
                    $("#username_check").text("close");
                    $("#username_label").css("color", "red");
                }
            }

        );

        $("#emailid").blur(() => {
            if (/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/.test($("#emailid").val())) {
                $("#email_check").css({
                    "visibility": "visible",
                    "color": "green"
                }).text("check");
                
                $("#email_label").css("color", "green").text("Valid Email");
                
            }
            else
            {
                $("#email_check").css({
                    "visibility": "visible",
                    "color": "red"
                }).text("close");
                $("#email_label").css("color", "red").text("Invalid Email");
                
            }
        });

    }

)