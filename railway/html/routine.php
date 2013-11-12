<?php
session_start();
$username="root";
$password="";
$database="railway";
$host="localhost";
mysql_connect("$host","$username","$password");
@mysql_select_db($database) or die( "Unable to select database");
$email=$_SESSION['name'];
$sql="select *from data where email='$email' ORDER BY `data`.`count` desc";
$result=mysql_query($sql)or die("died");
$row=mysql_fetch_array($result);

$tid=$row['train'];
$sql1="select name from trains where id='$tid'";
$res1=mysql_query($sql1);
$row1=mysql_fetch_array($res1);
$_SESSION['routine']=$row['id'];
if($row)
{

?>

<font ><h3 align="center"><?php echo $row1['name']?></font> 

<table border="4" width="600" align="center" cellspacing="2" cellpadding="4" bgcolor="white">
<tr>
<td><font face="Arial, Helvetica, sans-serif" >S.No.</font></td>
<td><font face="Arial, Helvetica, sans-serif" >NAME</font></td>
<td><font face="Arial, Helvetica, sans-serif">AGE</font></td>
<td><font face="Arial, Helvetica, sans-serif">GENDER</font></td>
</tr>

<?php
$i=0;
 

$f1=mysql_result($result,$i,"per1");
$f2=mysql_result($result,$i,"a1");
$f3=mysql_result($result,$i,"g1");
$f4=mysql_result($result,$i,"per2");
$f5=mysql_result($result,$i,"a2");
$f6=mysql_result($result,$i,"g2");
$f7=mysql_result($result,$i,"per3");
$f8=mysql_result($result,$i,"a3");
$f9=mysql_result($result,$i,"g3");
$f10=mysql_result($result,$i,"per4");
$f11=mysql_result($result,$i,"a4");
$f12=mysql_result($result,$i,"g4");
$f13=mysql_result($result,$i,"per5");
$f14=mysql_result($result,$i,"a5");
$f15=mysql_result($result,$i,"g5");
$f16=mysql_result($result,$i,"per6");
$f17=mysql_result($result,$i,"a6");
$f18=mysql_result($result,$i,"g6");
?>

<tr>
<td><font face="Arial, Helvetica, sans-serif"><?php echo "1"; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f1; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f2; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f3; ?></font></td>
</tr>
<tr>
<td><font face="Arial, Helvetica, sans-serif"><?php echo "2"; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f4; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f5; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f6; ?></font></td>

</tr>
<tr>
<td><font face="Arial, Helvetica, sans-serif"><?php echo "3"; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f7; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f8; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f9; ?></font></td>

</tr>
<tr>
<td><font face="Arial, Helvetica, sans-serif"><?php echo "4"; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f10; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f11; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f12; ?></font></td>

</tr>
<tr>
<td><font face="Arial, Helvetica, sans-serif"><?php echo "5"; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f13; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f14; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f15; ?></font></td>

</tr>
<tr>
<td><font face="Arial, Helvetica, sans-serif"><?php echo "6"; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f16; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f17; ?></font></td>
<td><font face="Arial, Helvetica, sans-serif"><?php echo $f18; ?></font></td>

</tr>
</table>

<h2 align="center">If the above details are correct ,Click to proceed<br><a href="enterdate.php" target="_blank">Proceed</a>
<?php

}
else
{
?>
<h2 align="center">NO data</h2>
<?php
}
?>

</body>
</html>