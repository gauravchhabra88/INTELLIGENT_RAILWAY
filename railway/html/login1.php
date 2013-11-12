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
$myusername=$_POST['Emailid'];
$mypassword=$_POST['password'];



$sql="SELECT * FROM $tbl_name WHERE emailid1='$myusername' and password='$mypassword'";
$result=mysql_query($sql)or die("wrong query");

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);
// If result matched $myusername and $mypassword, table row must be 1 row

if($count==1){
// Register $myusername, $mypassword and redirect to file "login_success.php"
session_register("username");

$_SESSION['name']=$myusername;
header("location:index1.php");
}
else {
echo "Wrong Username or Password";
}
?>

