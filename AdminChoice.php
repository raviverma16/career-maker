<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="Style/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function Valid(e,f)
{
	if(e.explicitOriginalTarget.name=="submit")return true;
	if(e.explicitOriginalTarget.name=="options")
	{
		var r=confirm("Would you like to Reset Every thing. If yes click 'Yes', else click 'Cancel'");
		if(r==true)
		{
			return true;
		}else 	
			return false;
	}	
	return false;
}

function TakeOption()
{
	var r=confirm("Would you like to Reset Every thing. If yes click 'Yes', else click 'Cancel'");
	if(r==true)
	{
		return true;
	}	
	return false;
}
</script>
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


<br>
<br>
<br>
<table align="Center">
<form action="http://localhost/OVS/HomePage.php" name='regis' method="post" onSubmit="return Valid(event,this)">
<tr><td><input type="button" style="width:190px;" value="Register Candidate" onclick="location.href='http://localhost/OVS/Register_Candidate.php'"></td></tr>
<tr><td><input type="button" style="width:190px;" value="Delete Candiate" onclick="location.href='http://localhost/OVS/Delete_Candidate.php'"></td></tr>
<tr><td><input type="submit" style="width:190px;" name="submit" value="Publish Result"></td></tr>
<tr><td><input type="submit" style="width:190px;" name="options" value="Reset" ></td></tr>

</form>

</table>

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
