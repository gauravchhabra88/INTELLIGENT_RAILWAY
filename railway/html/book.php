<?php
session_start();
$m1=$_GET['mem'];
$_SESSION['trainid']=$m1;
?>
<html>
<h3>Enter your Details </h3 >
 
 <table width="700" border="1" align="center" cellpadding="0" cellspacing="1" bgcolor="yellowgreen">

<form name="form1" method="post" action="insert.php">
<td>
<table width="100%" border="0" cellpadding="1" cellspacing="1" bgcolor="yellowgreen">
<tr>
<td colspan="3"><strong><font color=white>Enter</font> </strong></td>
</tr>
<tr>
<td width="78" ><font color=white>person1</font></td>
<td width="6">:</td>
<td width="94"><input name="person1" type="text" id="person1"><font color=white>Age<input name="age1" type="text" id="age1">Gender <select name="gender1" >
					  <option></option> <option>male</option> <option>female</option>
                      </select></td>
</tr>


<tr>
<td><font color=white>Person2</td>
<td>:</td>
<td><input name="person2" type="text" id="person2"><font color=white>Age<input name="age2" type="text" id="age2">Gender <select name="gender2" >
					  <option></option> <option>male</option> <option>female</option>
                      </select></td>
</tr>
<tr>
<td width="78"><font color=white>person3</td>
<td width="6">:</td>
<td width="294"><input name="person3" type="text" id="person3"><font color=white>Age<input name="age3" type="text" id="age3">Gender <select name="gender3" >
					  <option></option> <option>male</option> <option>female</option>
                      </select></td>
</tr>
<tr>
<td width="78"><font color=white>person4</td>
<td width="6">:</td>
<td width="294"><input name="person4" type="text" id="person4"><font color=white>Age<input name="age4" type="text" id="age4">Gender <select name="gender4" >
					  <option></option> <option>male</option> <option>female</option>
                      </select></td>
</tr>
<tr>
<td width="78"><font color=white>person5</td>
<td width="6">:</td>
<td width="94"><input name="person5" type="text" id="person5"><font color=white>Age<input width ="100" name="age5" type="text" id="age5">Gender <select name="gender5" >
					  <option></option> <option>male</option> <option>female</option>
                      </select></td>
</tr>
<tr>
<td width="78"><font color=white>person6</td>
<td width="6">:</td>
<td width="294"><input name="person6" type="text" id="person6"><font color=white>Age<input name="age6" type="text" id="age6">Gender <select name="gender6" >
					  <option></option> <option>male</option> <option>female</option>
                      </select></td>
</tr>

<tr>



<td><input type="submit" name="Submit" value="Book"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
</html>