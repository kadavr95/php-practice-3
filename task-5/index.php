<?php 
$arr = array( array("3116", "iPhone", 999 ),
    array("3118", "iPhone", 1099),
    array("3119", "iPhone", 1199),
    array("3086", "iPhone", 699),
    array("4188", "iPad", 899),
    array("4179", "iPad", 999),
    array("5045", "Watch", 699),
    array("1149", "Mac", 2999),
    array("1199", "Mac", 4999),
); 
usort($arr, function($a, $b) {
	if ($a[1]!=$b[1])
		return $a[1] <=> $b[1];
	else
    	return $a[2] <=> $b[2];
});
for ($i = 0; $i < sizeof($arr); $i++) 
{ for ($j=0; $j <sizeof($arr[0]); $j++) {
    echo ' | '.$arr[$i][$j]; } 
    echo '<br />'; }
?>