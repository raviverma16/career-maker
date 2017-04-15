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

<form method="post" action="http://localhost/OVS/VotingPage.php">
<?php
$usn=@$_POST["USN"];
$pass=@$_POST["pass"];
$otp=@$_POST["otp"];
mysql_connect("localhost","root","");
mysql_query("use ovs");
$res=mysql_query("select *from registration");
$flag=0;
$flag1=0;
$vname=@$_POST["VotingCandidate"];
session_start();
$f=0;
if($vname!=null)
{
	$var=@$_SESSION['userid'];
	$cmp=@mysql_query("select *from userstatus where usn='".($var)."'");
	while($result=mysql_fetch_array($cmp))
	{
		if($result['status']!=1){$f=1;
			mysql_query("update candidate set nov=nov+1 where usn='".($vname)."'");
			mysql_query("update userstatus set status=1 where usn='".($var)."'"); 
		}
	}
	if($f==0)
	{
			echo "<center><strong><font color='#875403'>What's the hell is this, You are already Voted...............!</font></strong></center>";
	}
	else
			echo "<center><strong><font color='#875403'>You are Succesfully Voted....:)</font></strong></center>";
}
else{
if($vname==null)
{
while($r=mysql_fetch_array($res))
{

	if($r['usn']==$usn && $r['passwd']==$pass && $otp==$r['otp'])
	{
		echo "<select name='VotingCandidate'>";
		$flag=1;
		$res1=mysql_query("select *from registration where year='".$r['year']."'");
		while($s=mysql_fetch_array($res1))
		{
			$res2=mysql_query("select *from candidate");	
			while($t=mysql_fetch_array($res2))
			{
				if($s['usn']==$t['usn'])
				{
					
					$flag1=1;
					echo "<option value='".($t['usn'])."'>".($t['usn'])."</option>";
					$_SESSION['userid']=$usn;
					mysql_query("insert into userstatus values('".$usn."',0)");
				}			
			}

		}
		echo "</select>";
	}	
}
}
if($flag==0)
	echo "<center><strong><font color='#875403'>Sorry............! You are not a valid Student to Vote</font></strong></center>";
else if($flag1==0)
	echo "<center><strong><font color='#875403'>No Candidates Available...............!</font></strong></center>";
else
	echo "<input type='submit' value='VOTE'/>";
}
?>


</form>
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
