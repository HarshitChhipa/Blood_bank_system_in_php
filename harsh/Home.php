<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<?php
$message=<<<EOF

<center><span style="color:red;font-weight:bold;font-size:30pt">Welcome to Blood Bank Management System!</span></center>
<br><br><br>
<span style="font-size:20pt">
<a href="Register.html">Register Now!</a>&nbsp;&nbsp;
<a href="Login.php">Login</a>&nbsp;&nbsp;
<a href="Discussion.php">Discussion Forum</a>
<br><br><br>
This site maintains the list of the blood donors, so that users can search for a particular blood group whenever they require. It also contains a discussion forum, where you can talk to other users of this site.<br>
You must register on this website to donate or ask for blood, but you can talk to the users and guests through our discussion forum without registering.
<br><br>
<center>Donate Blood,Donate Life!</center>
<hr>
</span>
EOF;

echo $message;
?>
</html>