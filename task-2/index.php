<?php
 $mass = array("первый" => $_POST["z1"], "второй" => $_POST["z2"], "третий" => $_POST["z3"]);
 foreach ($mass as $key=>$value)
     echo'индекс '.$key.' значение '.$value.'<br>';
 $poisk=$_POST["z4"];
 if (in_array ($poisk, $mass))  {
echo "элемент с указанным значением найден!<br>"; 
echo "ключ найденного элемента - ".array_search($poisk, $mass)."<br><br>"; 
 }
 array_pop($mass);
foreach ($mass as $key=>$value)
     echo'индекс '.$key.' значение '.$value.'<br>';
 echo "<br>";
array_push($mass,$_POST["z6"]);
foreach ($mass as $key=>$value)
     echo 'индекс '.$key.' значение '.$value.'<br>';

?>