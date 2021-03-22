function registration_validate()
{
const create_password = document.getElementById("create_password").value ;
const confirm_password = document.getElementById("confirm_password").value ;
const phn_number = document.getElementById("phn_number").value ;
const phn_number_test = /^[0-9]{10}$/ ;
if(!phn_number_test.test(phn_number*1))
{
    document.getElementById("phone_no_label").style.color = "red" ;
    document.getElementById("phone_no_label").innerHTML = "Plese Enter Correct Number" ;
    return false ;
}
else
{
    document.getElementById("phone_no_label").style.color = "#26a69a" ;
    document.getElementById("phone_no_label").innerHTML = "Phone Number" ;
}
if(create_password != confirm_password)
{
    document.getElementById("create_password_label").style.color = "red" ;
    document.getElementById("confirm_password_label").style.color = "red" ;
    document.getElementById("create_password_label").innerHTML = "Passwords didn't match" ;
    document.getElementById("confirm_password_label").innerHTML = "Passwords didn't match" ;
    return false ;
}

else
{
    document.getElementById("create_password_label").style.color = "#26a69a" ;
    document.getElementById("confirm_password_label").style.color = "#26a69a" ;
    document.getElementById("create_password_label").innerHTML = "Create Password" ;
    document.getElementById("confirm_password_label").innerHTML = "Confirm Password" ;
}

}