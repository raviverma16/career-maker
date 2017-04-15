<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="Style/style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
<!--
body {
	background-color: #6F6A61;
}
body,td,th {
	color: #000000;
}
-->
</style></head>

<body>
<div id="header"><img src="Images/Logo Online Voting System (2).png" width="1065" height="203" align="absmiddle" /></div>
<div class="home_page">

<h3><center>Welcome to Online Voting System</center></h3>


<?php
$sub=@$_POST["submit"];
$op=@$_POST["options"];
@mysql_connect("localhost","root","");
@mysql_query("use ovs");
if($op!=null)
{
	mysql_query("delete from candidate");
	mysql_query("delete from registration");
	mysql_query("update admin set status='0' where aid='Admin'");
	mysql_query("delete from userstatus");
	echo "<script type=\"text/javascript\">alert(\"Reset Successfully\");</script>";
}	
if($sub!=null)
{
	
	echo "<h3><font color='red'><center> <u>The Candidate Participate in Election are</u> </center></font></h3>";
	echo "<table border='0' align='center'>";
	mysql_query("update Admin set status=1 where aid='Admin'");
	$res=mysql_query("select *from candidate");
	echo "<tr><th color='red'>USN</th><th color='red'>Number Of Votes</th><th> </th></tr>";
	while($r=mysql_fetch_array($res))
	{
		echo "<tr><td align='center'>".($r['usn'])."</td><td align='center'>".($r['nov'])."</td><td>".(" ")."</td></tr>";			
		$_SESSION['my']="submit";
	}
	echo "</table>";
}

else
{
	$res=mysql_query("select *from Admin");
	while($r=mysql_fetch_array($res))
	{
		if($r['status']==1)
		{
			echo "<h3><font color='red'><center> <u>The Candidate Participate in Election are</u> </center></font></h3>";
			echo "<table border='0' align='center'>";
			$res=mysql_query("select *from candidate");
			echo "<tr><th color='red'>USN</th><th color='red'>Number Of Votes</th><th> </th></tr>";
			while($r=mysql_fetch_array($res))
			{
				echo "<tr><td align='center'>".($r['usn'])."</td><td align='center'>".($r['nov'])."</td><td>".(" ")."</td></tr>";			
				
			}
			echo "</table>";
		}
	}
}
?>
</div>

<div id="navbar">
<ul id="navmenu">
<li><a href="http://localhost/OVS/HomePage.php">Home</a></li>
<li><a href="http://localhost/OVS/OVS.php">Register</a></li>
<li><a href="#">Login</a>
	<ul class="sub1">
    	<li><a href="http://localhost/OVS/UserLogin.php">UserLogin</a></li>
        <li><a href="http://localhost/OVS/AdminLogin.php">AdminLogin</a></li>
    </ul>	
</li>
<li><a href="http://localhost/OVS/Polling.php">Fee Payment</a></li>
<li><a href="#">ContactUs</a></li>
</ul>


</div>

<div class="sideright">
<marquee direction="up">
<h><strong>Instuctions to follow</strong></h>
<p>• This website is used by the election commissioners to update or modification purposes.</p>
<p>• The candidates who are all participating in the election can be nominated here.</p>
<p>• The Voters or citizens are register their names and get their election-id.</p>
<p>• On the date of the election the voters can vote to their candidates by this.</p>
<p>• Finally the result will be announced on the date of the results.</p>
</marquee>
</div>
</br>
</br>
</br>



<div style="position:absolute; left: 13px; top: 759px; width: 1067px; height: 26px;">
  <div align="center">Copyright @ Parashiva Murthu | Manoj K</div>
</div>
</body>
</html>
