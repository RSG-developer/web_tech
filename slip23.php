<?php
$opt=$_POST["option"];
$arr=array('Jan','feb','Mar','April','May');
print_r($arr);
echo"<br>";
switch($opt)
{
    case 1:array_push($arr,'June');
    print_r($arr);
    break;
    case 2:array_pop($arr);
    print_r($arr);
    break;
}

?>