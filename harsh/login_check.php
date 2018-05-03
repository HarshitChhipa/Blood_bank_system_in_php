<?php
session_start();

$link=mysql_connect("localhost","root","");
mysql_select_db("userinfo")or die("An error occured while logging in");

$email=$_POST['Demail'];
$pass=md5($_POST['Dpassword']);

//to secure
$email=stripslashes($email);
$email=mysql_real_escape_string($email);
$pass=mysql_real_escape_string($pass);

$query="SELECT * FROM general WHERE (Email='$email' AND Password='$pass') LIMIT 1";
if(!mysql_query($query))
echo "Error!<br>".mysql_error();
$result=mysql_query($query);
if(mysql_num_rows($result)==1)
{
$row=mysql_fetch_array($result);
$_SESSION['user']=$row[0];
echo "Login Success. Redirecting to Requests page...";
sleep(1);
Header("Location:req.php");
}

else
{
echo "<span style='color:red;font-size:20px'><center>Incorrect Username/Password Combination.</center></span><br>";
include("login.php");
}


?>
