<?php
$file1=$_POST["file1"];
$file2=$_POST["file2"];

$f1=fopen($file1,"r");
//$f2=fopen($file2,"w");  //for append use a or a+ mode
$f2=fopen($file2,"a");  //for append use a or a+ mode

if($f1 && $f2)
{
    while(($line=fgets($f1))!=false)
            fwrite($f2,$line);
}
//copy($file1,$file2);
//echo"Copied SuccesFully !";
echo "Append Successfully !";
fclose($f1);
fclose($f2);

?>