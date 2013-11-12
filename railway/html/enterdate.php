<?php
session_start();
$username="root";
$password="";
$database="railway";
$host="localhost";
mysql_connect("$host","$username","$password");
@mysql_select_db($database) or die( "Unable to select database");
$email=$_SESSION['name'];

?>
<table width="700" border="1" align="center" cellpadding="0" cellspacing="1" bgcolor="yellowgreen">
<form name="form1" method="post" action="insert1.php">
<td>
<table width="50%" border="0" cellpadding="1" cellspacing="1" bgcolor="yellowgreen">
<tr>
<td colspan="1"><strong><font color=white>Enter</font> </strong></td>
</tr>
<tr>
<td width="20" ><font color=white>Date</font></td>
<td width="6">:</td>
<td width="34"><input name="date" type="text" id="date"><font color=white></td>
</tr>
<tr>



<td><input type="submit" name="Submit" value="Proceed"></td>
</tr>
</form>
</table>