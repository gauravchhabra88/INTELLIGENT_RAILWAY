<?php
session_start();
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="railway"; // Database name
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");

$emailid=$_SESSION['name'];
echo $emailid;
$trainid1=$_SESSION['trainid'];
echo $trainid1;
$person11=$_POST['person1'];
echo $person11;
$person21=$_POST['person2'];
$person31=$_POST['person3'];
$person41=$_POST['person4'];
$person51=$_POST['person5'];
$person61=$_POST['person6'];

$age1=$_POST['age1'];
$age2=$_POST['age2'];
$age3=$_POST['age3'];
$age4=$_POST['age4'];
$age5=$_POST['age5'];
$age6=$_POST['age6'];
$gender1=$_POST['gender1'];
$gender2=$_POST['gender2'];
$gender3=$_POST['gender3'];
$gender4=$_POST['gender4'];
$gender5=$_POST['gender5'];
$gender6=$_POST['gender6'];
$sql="SELECT * FROM railway.data WHERE (data.email='$emailid' AND data.train='$trainid1'and per1='$person11' and per2='$person21' and per3='$person31' and per4='$person41' and per5='$person51' and per6='$person61' )";
$result =mysql_query($sql) or die("djf");
$num=mysql_num_rows($result);
echo $num;
if(!$num)
{
$sql="insert into data(train,email,per1,per2,per3,per4,per5,per6,a1,a2,a3,a4,a5,a6,g1,g2,g3,g4,g5,g6) values('$trainid1','$emailid','$person11','$person21','$person31','$person41','$person51','$person61','$age1','$age2','$age3','$age4','$age5','$age6','$gender1','$gender2','$gender3','$gender4','$gender5','$gender6')";
$result=mysql_query($sql)or die("ghghgh");
$sql="SELECT * FROM railway.data WHERE (data.email='$emailid' AND data.train='$trainid1'and per1='$person11' and per2='$person21' and per3='$person31' and per4='$person41' and per5='$person51' and per6='$person61' )";
$result =mysql_query($sql) or die("djf");
$row=mysql_fetch_array($result);
$_SESSION['uid']=$row['id'];
header("location:detailentered.php");
}
else
{
$row=mysql_fetch_array($result);
$co=$row['count']+1;
$rid=$row['id'];
$_SESSION['uid']=$row['id'];
$sql="update data SET count='$co' where id='$rid'";
$result=mysql_query($sql);
header("location:detailentered.php");

}

?>