<?php
$option=$_POST["option"];

$arr=array(1,2,3,4,5,6,7);
print_r($arr);
echo"<br>";
switch($option)
{
    case 1:array_unshift($arr,8);
            print_r($arr);
        break; 
    case 2:array_shift($arr);
        print_r($arr);
        break;
    case 3:print_r($arr);
    break;
}


?>