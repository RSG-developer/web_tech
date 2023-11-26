<?php
$opt=$_POST["option"];

$arr=array("JAN"=>31,"FEB"=>28,"MAR"=>32,"APRIL"=>30);
print_r($arr);
echo"<br>";
switch($opt)
{
    case 1:$res=array_flip($arr);
        print_r($res);
        break;
    case 2:shuffle($arr);
            print_r($arr);
            break;
    case 3:extract($arr);
            echo"$JAN<br>$FEB<br>$MAR<br>$APRIL";
            break;
    case 4:print_r($arr);
}




?>