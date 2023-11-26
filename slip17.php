<?php
$arr=array("Sagar"=>"31","Vicky"=>"41","Leena"=>"39","Ramesh"=>"40");
print_r($arr);
echo"<br> Asscending order sort by values  <br>";
asort($arr);
print_r($arr);



echo"<br> Ascending order sort ny key <br>";
ksort($arr);
print_r($arr);

echo"<br>descending order sorting by Value <br>";
arsort($arr);
print_r($arr);
echo"<br>descending order sorting by key<br>";
krsort($arr);
print_r($arr);
?>