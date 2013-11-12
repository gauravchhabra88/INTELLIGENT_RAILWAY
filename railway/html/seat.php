<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">


<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">
<title>future railway</title>
<meta name="GENERATOR" content="Created by BlueVoda Website builder http://www.bluevoda.com">
<meta name="HOSTING" content="Hosting Provided By VodaHost http://www.vodahost.com">
<style type="text/css">
div#container
{
   width: 800px;
   height: 600px;
   margin-top: 0px;
   margin-left: 0px;
   text-align: left;
}
</style>
<style type="text/css">
body
{
   background-color: #FFFFFF;
   color: #000000;
}
</style>
<link rel="stylesheet" href="./cupertino/jquery.ui.all.css" type="text/css">
<style type="text/css">
a:hover
{
   color: #290200;
}
</style>
<script type="text/javascript" src="./jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="./jquery.ui.core.min.js"></script>
<script type="text/javascript" src="./jquery.ui.widget.min.js"></script>
<script type="text/javascript" src="./jquery.ui.datepicker.min.js"></script>
<style type="text/css">
.ui-datepicker
{
   font-family: Arial;
   font-size: 13px;
   z-index: 1003 !important;
   display: none;
}
</style>
<script type="text/javascript">
$(document).ready(function()
{
   var jQueryDatePicker1Opts =
   {
      dateFormat: 'mm/dd/yy',
      changeMonth: false,
      changeYear: false,
      showButtonPanel: false,
      showAnim: 'show'
   };
   $("#jQueryDatePicker1").datepicker(jQueryDatePicker1Opts);
});
</script>

<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title><?php 
$mem=$_SESSION['name'];
$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="railway"; // Database name
$tbl_name="members"; // Table name

// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
$sql="select username from members where emailid1='$mem'";
$result=mysql_query($sql);
$row=mysql_fetch_array($result);
echo $row['username'];?>
</title>
<link href="style1.css" rel="stylesheet" type="text/css" />
</head>

<body>
<table width="900" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td align="left" valign="top" class="topbg"><table width="868" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="647" align="left" valign="top"><a href="index1.php"><img src="images1/logo.gif" alt="RPS-Group" width="334" height="46" border="0" title="RPS-Group" /></a></td>
        <td width="253" align="left" valign="top"><table width="237" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50" align="left" valign="top"><img src="images1.gif" alt="" width="42" height="46" /></td>
            <td width="187" align="left" valign="top"><h2 class="contact">WELCOME</h2>
			<p class="contnum"><?PHP echo $row['username']; ?></p>
			</td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="top" class="headerbg"><table width="457" border="0" class="hdrcont" cellspacing="0" cellpadding="0">
      <tr>
        <td align="left" valign="top">
		<ul class="navlink">
		<li class="home"><a href="index1.php" title="Home">Home</a></li>
		<li><a href="routine.php" title="Your General Routine">Your General Routine</a></li>
		<li><a href="logout.php" title="Logout">Logout</a></li>
		<li><a href="mostrecent1.php" title="Most Recent">Most Recent</a></li>
		<li class="contact"><a href="booked.php" title="Booked.php">Booked tickets</a></li>
		</ul>
		</td>
      </tr>
      <tr>
        <td align="left" valign="top">
		<p class="captiontoptext"><b>Another Success story</b></p>
		<h1 class="caption">DELHI
<span>METRO</span></h1>
<p class="captiontext">A World Class Metro </p>
<p class="captionlowertext">To ensure reliability and safety in train operations, it is equipped with the most modern communication and train control system.</p>

</td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td align="left" valign="top" class="bodybottompadd"><table width="900" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="308" align="left" valign="top"><table width="278" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="left" valign="top" class="formbg"><!--Form Starts --><form id="form1" name="form1" method="post" action="traindetails.php"><table width="247" border="0" class="formposition" cellspacing="0" cellpadding="0">
              <tr>
                <td align="left" valign="top" class="formpadd"><table width="247" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="59" align="left" valign="top"><img src="images1/searchicon.gif" alt="" width="42" height="45" /></td>
                    <td width="188" align="left" valign="middle"><h3 class="property">Enter your Details</h3></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td height="33" align="left" valign="top"><table width="247" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="80" align="left" valign="top" class="searchtext">FROM:</td>
                    <td width="167" align="left" valign="top">
                  	 <select name="from" class="select">
					 <option>newdelhi</option><option>chennai</option>
                      </select>
                    </td>
                  </tr>
                </table></td>
              </tr>
			  <tr>
                <td height="33" align="left" valign="top"><table width="247" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="80" align="left" valign="top" class="searchtext">TO:</td>
                    <td width="167" align="left" valign="top">
                  	 <select name="to" class="select">
					 <option>select</option><option>newdelhi</option><option>chennai</option>
                      </select>
                    </td>
                  </tr>
                </table></td>
              </tr>

              <tr>
                <td height="47" align="left" valign="top"><table width="220" border="0" align="right" class="textboxposition" cellpadding="0" cellspacing="0">
                <tr>
                    <td width="80" align="left" valign="top" class="searchtext">Quota:</td>
                    <td width="167" align="left" valign="top">
                  	 <select name="quota" class="select">
					 <option>select</option><option>general</option><option>tatkal</option>
                      </select>
                    </td>
                  </tr>
				</table></td>
              </tr>
              <tr>
                <td align="left" valign="top"><table width="240" border="0" align="right" cellpadding="0" cellspacing="0">
                  <tr>
                 <td width="80" align="left" valign="top" class="searchtext">date:</td>
                    <td width="167" align="left" valign="top">
                 <input type="text" id="jQueryDatePicker1" name="jQueryDatePicker1" value="">
                </table></td>
              </tr>
              <tr>
                <td height="43" align="right" valign="bottom">
                  <input type="image" name="imageField" src="images1/search.gif" title="find" />
         </td>
              </tr>
            </table></form><!--Form Ends --></td>
          </tr>
          <tr>
            <td align="left" valign="top" class="bodypadd"><table width="278" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td align="left" valign="top"><a href="#"><img src="images1/banner.jpg" alt="Dream House" title="Dream House" width="278" height="126" border="0" /></a></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
        <td width="592" align="left" valign="top"><table width="592" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td align="left" valign="top"><h2 class="welcome">Welcome to our site !</h2>
			<p class="welcometext">We provide the best services currently available in online railway booking system in India, along with our exciting new offers!!!</p>		  </td>
          </tr>
          <tr>
            <td align="left" valign="top"><table width="592" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td align="left" valign="top"><table width="592" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="143" align="left" valign="top"><img src="images1/image01.jpg" alt="image01" title="image01" width="119" height="86" /></td>
                    <td width="449" align="left" valign="top"><p class="welcometext01"> Now you can also check Train Alert, PNR Status, Train Status, Seat Availability, Train Schedule, Train Information, Train Time Table, Train Fare etc. on Mobile. </p>
					<p class="clickhere"><a href="#" title="Click Here">Click Here...</a></p>
					</td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td align="left" valign="top" class="rightpadd"><table width="592" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="143" align="left" valign="top"><img src="images1/image02.jpg" alt="image02" title="image02" width="120" height="84" /></td>
                    <td width="449" align="left" valign="top"><p class="welcometext01"><?php

$m1=$_GET['memid'];
$dt =$_SESSION['date'];

$host="localhost"; // Host name
$username="root"; // Mysql username
$password=""; // Mysql password
$db_name="railway"; // Database name
$tbl_name="seats"; // Table name
echo $dt;
// Connect to server and select databse.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
$sql="select  * from seats where (id='$m1' and  dates='$dt')";
$result=mysql_query($sql);
$sql1="select  * from trains where (id='$m1')";
$result1=mysql_query($sql1);
echo "<table border ='3'>";
echo "<tr>";
echo "<th>Train number</th><th>Train name</th><th><font color=#ff0000>seats</font></th><th>quota</th><th>book</th>";
echo "</tr>";
$row = mysql_fetch_array($result);
$row2 = mysql_fetch_array($result1);



$row1=$row['sea'];
echo "<tr>";
echo "<td><h3><font color=#ff0000>",$row2['number'],"</font></h3></td>","<td><h3><font color=#ff0000>",$row2['name'],"</font></h3></td>","<td><h3><font color=#ff0000>",$row1,"</font></h3></td><td>",$row['cat'],"</td><td><a href=book.php?mem=$m1>","book","</a></td>";

echo "</tr>";

echo "</table>";
?></p>
                   <p class="clickhere"><a href="#" title="Click Here">Click Here...</a></p>
				   </td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td align="left" valign="top" class="rightpadd01"><table width="592" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="119" align="left" valign="top" class="servicesbg"><h4 class="services">Services</h4>
				<p class="servicestext">Some of the features of our site.
</p>
<p class="knowmore"><a href="#" title="know more">know more</a></p>
				</td>
                <td width="48" align="left" valign="top" class="numberbg"><table width="32" border="0" class="numberposition" cellspacing="0" cellpadding="0">
                  <tr>
                    <td align="center" valign="middle" class="number">01.</td>
                  </tr>
                  <tr>
                    <td height="62" align="left" valign="bottom" class="number">02.</td>
                  </tr>
                </table></td>
                <td width="425" align="left" valign="top" class="servicesbg"><table width="425" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td align="left" valign="top"><p class="numbertext"><a href="#"></a> We keep the details of all your travels, helping is providing a feature, which no other company offers. We give you the option to book your most recent travel again, without having to fill the entire form again, thus saving your precious time.</p></td>
                  </tr>
                  <tr>
                    <td align="left" valign="top" class="padd01"><p class="numbertext"><a href="#"></a> The records of all your travel details also help us in providing the new feature called my favourite travel, in this feature we select your most traveled route and then you can book a ticket on this route with just one click.</p></td>
                  </tr>
                </table></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="66" align="center" valign="middle" class="footerbg"><table width="878" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="278" align="left" valign="top" class="copyright">Copyright &copy; Future Railways</td>
        <td width="397" align="left" valign="top" class="footerlink"><a href="index.html" title="Home">Home</a>  <span>  : </span>   <a href="aboutus.html" title="About&nbsp;Us">About&nbsp;Us</a>    <span>  : </span>    <a href="#" title="Logout">Logout</a>    <span>  : </span>    <a href="#" title="Sell">Sell</a>    <span>  : </span>    <a href="#" title="Contact&nbsp;Us">Contact&nbsp;Us</a></td>
        <td width="203" align="right" valign="top" class="copyright">Design by:Ankit and Akash</td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>


