<?php
session_start();
$username="root";
$password="";
$database="railway";
$host="localhost";
mysql_connect("$host","$username","$password");
@mysql_select_db($database) or die( "Unable to select database");
$emailid=$_SESSION['name'];
$trainid1=$_SESSION['trainid'];
$uid=$_SESSION['uid'];
$date2=$_SESSION['date'];

$sql="select * from data where id='$uid'";
$result=mysql_query($sql);

$row=mysql_fetch_array($result);

$per1=$row['per1'];
$per2=$row['per2'];
$per3=$row['per3'];
$per4=$row['per4'];
$per5=$row['per5'];
$per6=$row['per6'];
$a1=$row['a1'];
$a2=$row['a2'];
$a3=$row['a3'];

$a4=$row['a4'];
$a5=$row['a5'];
$a6=$row['a6'];
$g1=$row['g1'];
$g2=$row['g2'];
$g3=$row['g3'];
$g4=$row['g4'];
$g5=$row['g5'];
$g6=$row['g6'];




$sql="insert into cdata(train,email,per1,per2,per3,per4,per5,per6,a1,a2,a3,a4,a5,a6,g1,g2,g3,g4,g5,g6,date) values('$trainid1','$emailid','$per1','$per2','$per3','$per4','$per5','$per6','$a1','$a2','$a3','$a4','$a5','$a6','$g1','$g2','$g3','$g4','$g5','$g6','$date2')"; 

$result=mysql_query($sql);
$sql="select * from seats where id='$trainid1'";
$result=mysql_query($sql)or die("died");
$row=mysql_fetch_array($result);
$up=$row['sea']-1;
echo $up;
$sql="update seats set sea='$up' where id='$trainid1' and dates='$date2'";
$result=mysql_query($sql);
header("location:index1.php");

?>