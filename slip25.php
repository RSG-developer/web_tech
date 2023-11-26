<?php
$fp=fopen("example.txt","r");

echo"file type is ".filetype("example.txt");
$lastmodifiedtime=fileatime("example.txt");
echo"<br> last modified time is ".date("F d Y H:i:s",$lastmodifiedtime);

echo"<br> Size of the file is ".filesize("example.txt");

$del=unlink("example.txt");
echo"<br>".$del;



?>