<?php

$f1=fopen("sample1.txt","r");
$f2=fopen("sample2.txt","w");

if($f1 && $f2)
{
    while(($line=fgets($f1))!=false)
    {
        fwrite($f2,$line);
    }
}
echo"copied successfully !";

fclose($f1);
fclose($f2);

?>