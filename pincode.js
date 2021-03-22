$(document).ready(() => 
{
    $("button").click(() =>
    {
        $.ajax({
            url:"dbch.php" ,
            type:"POST",
            sucess:() => 
            {
                alert("ok bro") ;
            }
        }) ;
        
    });
}
)