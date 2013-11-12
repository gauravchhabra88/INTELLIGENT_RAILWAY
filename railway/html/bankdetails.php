<?php
session_start();
$_SESSION['trainid']

?>
<h3>Enter your Details </h3 >
 
 <table width="400" border="1" align="center" cellpadding="0" cellspacing="1" bgcolor="yellowgreen">

<form name="form1" method="post" action="update.php">
<td>
<table width="100%" border="0" cellpadding="1" cellspacing="1" bgcolor="yellowgreen">
<tr>
<td colspan="3"><strong><font color=white>Enter</font> </strong></td>
</tr>
<tr>
<td width="78" ><font color=white>Cardnumber</font></td>
<td width="6">:</td>
<td width="134"><input name="cardnumber" type="text" id="cardnumber"><font color=white></td>
</tr>


<tr>
<td><font color=white>cvv</td>
<td>:</td>
<td><input name="cvv" type="text" id="cvv"><font color=white></td>
</tr>
<tr>
<td width="78"><font color=white>name</td>
<td width="6">:</td>
<td width="294"><input name="holder" type="text" id="holder"><font color=white></td>
</tr>
<tr>
<td width="178"><font color=white>pin</td>
<td width="6">:</td>
<td width="294"><input name="pin" type="password" id="pin"><font color=white></td>
</tr>


<tr>



<td><input type="submit" name="Submit" value="proceed"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
