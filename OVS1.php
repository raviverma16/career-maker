<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="style.css" rel="stylesheet" type="text/css" />
<link href="Style/style.css" rel="stylesheet" type="text/css" />
<link rel='stylesheet' href='js-form-validation.css' type='text/css' />  

<script src="sample-registration-form-validation.js"></script>  

<style type="text/css">
<!--
body {
	background-color: #408080;
}
body,td,th {
	color: #000000;
}
-->
</style></head>

<body>
<div id="header"><img src="Images/Logo Online Voting System3 (2).png" width="1065" height="203" align="absmiddle" /></div>
<div class="home_page">


<form name='registration' method="post" action="http://localhost/OVS/OVS.php" onSubmit="return formValidation();">  
<table width="483" height="273" border="0" align="center">
<tr><td width="167">
<label for="userid">User id: </label>
</td>
<td width="300">1SI<input type="text" name="yr" size="2"> 
<select name="branch" style="width:50px;">  
<option selected="" value="Default">(Please select a Branch)</option>  
<option value="CS">CS</option>  
<option value="EC">EC</option>  
<option value="EE">EE</option>  
<option value="ME">ME</option>  
<option value="CE">CE</option>  
</select>
<input type="text" name="userid" size="2" /></td></tr>

<tr><td>  
<label for="passid">Password:</label></td><td>
<input type="password" name="passid" size="50" /></td></tr>

<tr><td>  
<label for="cpassid">Confirm Password:</label></td><td>
<input type="password" name="cpassid" size="50" /></td></tr>

<tr><td>  
<label for="username">Name:</label></td><td>  
<input type="text" name="username" size="50" /></td></tr>

<tr><td>  
<label for="country">Branch:</label>  </td><td>
<select name="country">  
<option selected="" value="Default">(Please select a Branch)</option>  
<option value="CSE">CSE</option>  
<option value="ECE">ECE</option>  
<option value="EEE">EEE</option>  
<option value="ME">ME</option>  
<option value="CE">CE</option>  
</select>
</td></tr>

<tr><td>
<label for="Year">Year:</label></td><td><select name="Year">
  <option selected="" value="Default">(Please select a Year)</option>
  <option value="Fisrt Year">First Year</option>
  <option value="Second Year">Second Year</option>
  <option value="Third Year">Third Year</option>
  <option value="Fourth Year">Fourth Year</option>
</select></td>
</tr>

<tr><td>
<label for="email">Email:</label>  </td><td>
<input type="text" name="email" size="50" /></td></tr>

<tr>
  <td><input type="submit" name="submit" value="Submit" style="width:150px;height:30px;"/></td>
  <td><input type="reset" name="Clear" value="Clear" style="width:150px;height:30px;"/></td>
</tr>
</table> 
</form>  

<?php
mysql_connect("localhost","root","");
mysql_query("use ovs");
$yrs=@$_POST["yr"];
$branch=@$_POST["branch"];
$usn=@$_POST["userid"];
$pass=@$_POST["passid"];
$name=@$_POST["username"];
$branch1=@$_POST["country"];
$year=@$_POST["Year"];
$email=@$_POST["email"];
$flag=0;
$randno=rand(1000,10000);
$flag=@mysql_query("insert into registration values('".("1SI").($yrs).($branch).($usn)."','".($pass)."','".($name)."','".($branch1)."','".($year)."','".($randno)."')");
if($usn!=null)
if(@$flag)
echo @"<span color='green'>Registered Successfully<br> Your OTP is $randno</span>";
else
echo @"<span color='green'>Registered UnSuccessfully</span>";
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
<li><a href="http://localhost/OVS/Polling.php">Polling</a></li>
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
