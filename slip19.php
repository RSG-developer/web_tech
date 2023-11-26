<?php
$s1=$_POST["fstring"];
$s2=$_POST["Sstring"];
$pos=$_POST["pos"];
$ch=$_POST["no_char"];

echo"<br>big Striing: ::".$s1;
echo"<br>small String ::".$s2;


//Delete a small part from first string after accepting position and number of characters to 
//remove. 
$s1=substr_replace($s1," ",$pos,$ch);
echo"<br>".$s1;


//Insert the given small string in the given big string at specified position without removing 
//any characters from the big string.
$s1=substr_replace($s1,"Hello ",6,0);
echo"<br>".$s1;

//Replace some characters/ words from given big string with the given small string at 
//specified position. 
$s1=substr_replace($s1,$s2,5,5);
echo"<br>".$s1;

?>