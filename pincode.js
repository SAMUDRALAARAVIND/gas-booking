$(document).ready(() => 
{
    $("#pincode").blur(() =>
    {
        $.ajax({
            url: 'dbch.php' ,
            type: 'POST' ,
            data:{pin_code:$("#pincode").val()},
            success:(data) => 
            {
               const pincode =JSON.parse(data)[0]["Status"] ;
               if(pincode == "Success")
               {
                   $("#pincode_label").css("color","green") ;
                   $("#pincode_label").text("Valid Pincode") ;
               }
               else
               {
                $("#pincode_label").css("color","red") ;
                $("#pincode_label").text("Invalid Pincode") ;
               }
            }
        }) ;
        
    });
}
)