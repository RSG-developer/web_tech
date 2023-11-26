<?php
$small_str=$_POST['fstr'];
$big_str=$_POST['sstr'];
$ch=$_POST['opt'];
echo "<br>".$small_str;
echo "<br>".$big_str;
switch($ch)
{
    case 1:
    $f=preg_match("/$small_str/",$big_str);
    if($f)
    {
        echo"<br> Small String is in big string";
    }
    else{
        echo"Not found";
    }
    break;
    case 2:
    $pos=strpos($big_str,$small_str);
    echo "<br> The position is ".$pos;
    break;
    case 3:
        if(strcasecmp($big_str,$small_str)==0)
        {
            echo"<br>Strings are equal ";
        }
        elseif(strcasecmp($big_str,$small_str)>0)
        {
            echo"<br> Big string is greater";
        }
        else
        {
            echo"<br> Small String is greater";
        }
        break;
}
?>