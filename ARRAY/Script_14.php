<?php
//14. Remove the email element from the associative array and display the updated array. 
$personal_detail = array(
    "name"=>"Vidhey",
    "age"=>"22",
    "email"=>"vidheygadara123@gmail.com");
unset($personal_detail["email"]);
print_r($personal_detail)
?>