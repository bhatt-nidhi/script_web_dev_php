<?php
$color=array("green", "yellow", "blue","pink","red","black");
$mycolor=array_shift($color);
$mycolor=array_unshift($color,"White");
print_r($color);

?>