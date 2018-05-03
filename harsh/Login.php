<?php
session_start();
if(isset($_SESSION['user']))
Header("Location:req.php");
?>

<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
<center><span style="font-weight:bold;font-size:30pt">Login</span></center>
<br><br><br>
<span style="font-size:20pt">
<a href="Home.php">Home</a>&nbsp;&nbsp;
<a href="Register.html">Register Now!</a>&nbsp;&nbsp;
<a href="Discussion.php">Discussion Forum</a>
</span>
<br><br><br>
<fieldset style="width:50%">
<table cellspacing="10">
<form action="login_check.php" method="POST">
<tr><td>Email: </td><td><input type="text" name="Demail"></td></tr>
<tr><td>Password: </td><td><input type="password" name="Dpassword"></td></tr>
<tr><td><input type="button" value="Login" onClick="submit()"></td></tr>
</form>
</table>
</fieldset>
</body>
</html>