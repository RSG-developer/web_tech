<?php
$str=$_POST["String"];

echo "ORIGINAL STRING IS ".$str;

echo "<br>first five character  are ".substr($str,0,5);

//convert the case and then title case
$lo=strtolower($str);
$uc=ucwords($lo);
echo"<br>Title case are :".$uc;

//padding the string

$str1=str_pad($str,strlen($str)+2,"*",STR_PAD_BOTH);
echo "<br> string  padding    ".$str;

$rev=strrev($str);
echo"<br> Reverse string is:".$rev;

?>

