<?php 

 $n=5; $m=3;
 function func1($x){
     $f=1;
     for($i=1;$i<=$x;$i++){
         $f*=$i;
            }
            return $f;
 }
 $C=func1($n)/(func1($m)*func1($n-$m));
 echo 'Значение =  '.$C;

?>