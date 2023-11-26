<?php
print("Displaying all values :=<br>");
$arr=array(30,25,35,32,31,33,34,39,38,40,43,41,47,50,32,34,36,39,32,35);
foreach($arr as $val)
{
    echo"$val<br>";
}
$averg=array_sum($arr)/count($arr);
echo"$averg is mean of temperature";
sort($arr);
print("<br>Displaying 5 most coolest temp<br>");
for($i=0;$i<6;$i++)
{
    echo" ".$arr[$i];
}
echo"<br>Displaying 5  most warmest temperatue <br>";
for($i=count($arr);$i>(count($arr)-6);$i--)
{
   echo" ".$arr[$i];
}
?>
