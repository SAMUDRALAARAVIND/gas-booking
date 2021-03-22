<?php

$pin_code = $_POST["pin_code"] ;
$check = file_get_contents("https://api.postalpincode.in/pincode/".$pin_code) ;
print_r($check) ;
?>