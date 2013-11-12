
<html>
<?php
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="railway"; // Database name
$tbl_name="members"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

// username and password sent from form
$myusername=$_POST['Name'];
$password = $_POST['password'];



$repeatnewpassword = $_POST['retype'];


$emailid=$_POST['Emailid'];


$result = mysql_query("SELECT password FROM $tbl_name WHERE emailid1='$emailid'");

    if(!(mysql_num_rows($result) <= 0))
	{
    header("location:success.php");
	}
	else
	{
	if($password==$repeatnewpassword)
	{
	$sql="INSERT INTO railway.$tbl_name(members.username,members.password,members.emailid1) VALUES ('$myusername','$password', '$emailid')";
	$result=mysql_query($sql);
	}}
	?>
 <h3 style="background-color:green;font-family:verdana;text-align:center;color:black;">Congratulations You have Successfully registered...<br><a href="index.html" target="_blank">Click to continue.</a> </h3>
	
        </html>
