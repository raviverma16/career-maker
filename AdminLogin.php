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
<script type="text/javascript">
function login()
{
	if(document.reg.USN.value=="Admin")
	{
		if(document.reg.pass.value=="Admin")
		{
			location.href="http://localhost/OVS/AdminChoice.php";
		}
		else
			alert("Invalid Password");
	}
		else
			alert("Invalid User");
}
</script>
<body>
<div id="header"><img src="Images/Logo Online Voting System (2).png" width="1065" height="203" align="absmiddle" /></div>
<div class="home_page">

<form name='reg'  method="post">
<table align="center">
<tr><td>USN :</td><td><input type="text" name="USN"/></td></tr>
<tr><td>Password :</td><td><input type="password" name="pass"/></td></tr>
<tr><td><input type="button" value="Submit" onclick="login()"/></td><td><input type="reset" value="Clear"/></td></tr>
</table>
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
