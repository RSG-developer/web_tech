<?php
$eno=$_REQUEST["Eventno"];

//$pg_connect("host=localhost  dbname=postgres user=postgres password=admin");
pg_connect("host=localhost dbname=postgres user=postgres password=admin") or die("Not connected to databasse");

$result=pg_query("select * from committe;");

$result1=pg_query("update committe set status='working' where cno in(select cno from EventCommitee where eno='$eno')");
echo"<table border =1>";
echo"<th>Committe no</th>";
echo"<th> name</th>";
echo"<th>head</th>";
echo"<th>from_time</th>";
echo"<th>to_time</th>";
echo"<th>status</th>";
while($row=pg_fetch_array($result))
{
    echo"<tr>";
        echo"<td>$row[0]</td>";
        echo"<td>$row[1]</td>";
        echo"<td>$row[2]</td>";
        echo"<td>$row[3]</td>";
        echo"<td>$row[4]</td>";
        echo"<td>$row[5]</td>";
        
    echo"</tr>";    
}
echo"</table>";
pg_close();
?>