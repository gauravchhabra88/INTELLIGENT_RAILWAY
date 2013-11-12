<?php
session_start();
$nm=$_SESSION['name'];
echo $nm;
$username="root";
$password="";
$database="railway";
$host="localhost";
mysql_connect("$host","$username","$password");
@mysql_select_db($database) or die( "Unable to select database");
$sql="select * from cdata where email='$nm'";
$result=mysql_query($sql)or die("died");

echo "<table border ='3'>";
echo "<tr>";
echo "<th>Train name</th><th>Number</th><th>from</th><th>to</th><th>arrivaltime</th><th>duration</th><th>Date</th>";
echo "</tr>";
while($row = mysql_fetch_array($result))
{
$tid=$row['train'];
$sql1="select *from trains where id='$tid'"; 
$result1=mysql_query($sql1)or die("died");

$row1=mysql_fetch_array($result1);

echo "<tr>";
echo "<td>","<h3>",$row1['name'],"</h3></td><td><h3><font color=#ff0000>",$row1['number'],"</h3></td><td><h3><font color=#ff0000>",$row1['from1'],"</h3></font></td><td><h3><font color=#ff0000>",$row1['to1'],"</h3></font></td><td><h3><font color=#ff0000>",$row1['arrivaltime'],"
</h3></font></td><td><h3><font color=#ff0000>",$row1['duration'],"</h3></font></td><td><h3><font color=#ff0000>",$row['date'],"</h3></font></td>";
echo "</tr></h3></font>";
}
echo "</table>";
?>