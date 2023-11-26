<?php
$num1=$_POST["num1"];
$num2=$_POST["num2"];
$opt=$_POST["option"];
echo"first number is ".$num1;
echo"<br>";
echo"second number is ".$num2;
switch($opt)
{
    case 1:$res=$num1 % $num2;
            echo"<br>The mod of the two numbers is ".$res;
        break;
    case 2:echo"<br>first raised to second number:".pow($num1,$num2);
            break;
    case 3: $sum=0;
        for($i=0;$i<$num1;+$i++)
        {
            $sum+=$i;
        }
        echo"<br>The sum of first n number ".$sum;
        break;
    case 4:$fact=1;
    for($i=1;$i<=$num2;+$i++)
    {
        $fact=$fact*$i;
    }
    echo"<br>The factorial of second number ".$fact;
}

?>