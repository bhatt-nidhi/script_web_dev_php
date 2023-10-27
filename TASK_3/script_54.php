<?php
$name=array(array("name"=>"Nidhi","Roll.no"=>"001","email"=>"nidhi123@gmail.com"),
                array("name"=>"shivi","Roll.no"=>"002","email"=>"shivi123@gmail.com"),
                array("name"=>"niti","Roll.no"=>"003","email"=>"niti123@gmail.com"));

$student=array_column($name,"email");
print_r($student);
                
?>