<?php
$hname=$_REQUEST['hosp_name'];
echo"Doctor visting $hname hospital";
pg_connect("host=localhost dbname=postgres user=postgres password=admin");
$res=pg_query("WITH HospitalInfo AS (SELECT hosp_no FROM hospital WHERE hname = '$hname') 
SELECT d.doc_no, d.dname, d.address, d.city, d.area FROM doctor d
JOIN HospitalInfo h ON d.hosp_no = h.hosp_no;");


//$res=pg_query("select hname ,dname from hospital,doctor where hosp_no=101;" );
echo"<table border=1>";
echo"<th>Doctor no</th>";
echo"<th>Doctor name</th>";
echo"<th>address</th>";
echo"<th>city</th>";
echo"<th>area</th>";
while($row=pg_fetch_array($res))
{
    echo"<tr>";
        echo"<td>$row[0]</td>";
        echo"<td>$row[1]</td>";
        echo"<td>$row[2]</td>";
        echo"<td>$row[3]</td>";
        echo"<td>$row[4]</td>";
        
    echo"</tr>";   
}
echo"</table>";
pg_close();

?>