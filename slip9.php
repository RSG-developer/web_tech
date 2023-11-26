<?php

$str1=$_POST['s1'];
$str2=$_POST['s2'];
$sep=$_POST['sep'];
$opt=$_POST['opt'];
echo"<br> original String is :".$str1;
echo"<br>".$sep;


switch($opt)
{
    case 1:$a=explode($sep,$str1);
        print_r($a);
        break;
    case 2:$a2=str_replace($sep,'#',$str1);
            echo"<br>";
            echo "String after replacement ".$a2;
            break;
    case 3:$pos=strpos($str1,$str2);
            echo"postion of word in string $pos";
            
    
}
?>