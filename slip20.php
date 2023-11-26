<?php
$opt=$_POST["option"];

$arr=array(1,2,4,3,6,5,7,8);
print_r($arr);
echo"<br>";

function iseven($v)
{
    return ($v%2==0);
}

switch($opt)
{
    case 1:$array=array_chunk($arr,3);
        print_r($array);
        break;
    case 2:asort($arr,true);
            print_r($arr);
            break;
    case 3:$even=array_filter($arr,"iseven");
            print_r($even);

}


?>