<?php 
$arr = array( array("Елена", "менеджер", 25 ),
    array("Михаил", "инженер", 37),
    array("Андрей", "водитель", 40)); 

for ($i = 0; $i < 3; $i++) 
{ for ($j=0; $j <3; $j++) {
    echo ' | '.$arr[$i][$j]; } 
    echo '<br />'; }
?>