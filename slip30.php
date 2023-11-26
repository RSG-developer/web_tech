<?php
$comp=$_REQUEST["comp"];
pg_connect("host=localhost dbname=postgres user=postgres password=admin") or die("Not connected to databasse");
$result=pg_query("select stud.roll,name,cname,rank from stud,comp,studcomp where stud.roll=studcomp.roll
and comp.cid=studcomp.cid and rank=1 and cname='$comp';");
echo"<table border=1>";
echo"<tr>";
echo"<th>Roll no</th>";
echo"<th>Name</th>";
echo"<th>Competition</th>";
echo"<th>Rank</th>";
echo"</tr>";
while($row=pg_fetch_array($result))
{
    echo"<tr>";
        echo"<th>$row[0]</th>";
        echo"<th>$row[1]</th>";
        echo"<th>$row[2]</th>";
        echo"<th>$row[3]</th>";
    echo"</tr>";    
}
echo"</table>";
pg_close();
?>