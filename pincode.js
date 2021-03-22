$(document).ready(() => 
{
    $("#pincode").blur(() =>
    {
        console.log(arr) ;
        $.ajax({
            url: 'dbch.php' ,
            type: 'POST' ,
            data:{pin_code:$("#pincode").val()},
            success:(data) => 
            {
               const pincode =JSON.parse(data)[0]["Status"] ;
               if(pincode == "Success")
               {
                   $("#pincode_label").css("color","green").text("Valid Pincode") ;
                  $("#pincode_check").css({"visibility":"visible" , "color":"green"}).text("check") ;
                  arr[6] = true ;
               }
               else
               {
                $("#pincode_label").css("color","red").text("Invalid Pincode") ;
                $("#pincode_check").css({"visibility":"visible" , "color":"red"}).text("close") ;
                arr[6] = false ;
               }
            }
        }) ;
        
    });
}
)