<?php
$x=$_POST["x"];
$y=$_POST["y"];
$z=$_POST["z"];

 function custom_function($x, $y, $z){
    return ($x-$y)/$z;
 }

 echo 'Значение =  '.custom_function($x, $y, $z);

?>