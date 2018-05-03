<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("userinfo");


if(!isset($_SESSION['user']))
{
Header("Location:Home.php",TRUE);
}

if(isset($_GET['Search']))
{
echo '<center><span style="font-weight:bold;font-size:30pt">Search Results</span></center>
<br><br><br>';


$Group=$_GET['Search'];
$query="SELECT * FROM general WHERE BGroup='$Group'";
$result=mysql_query($query);
while($row=mysql_fetch_array($result))
{
$UserID=$row[0];
echo "Name: ".$row[1]."&nbsp; Age: ".$row[2]."&nbsp; Blood Group: ".$row[3]."&nbsp; Contact: ".$row[5]."<br>";
echo '<a href="make_req2.php?id='.$UserID.'">Make a Request</a>';
echo "<br><br><br>";
}
exit;

}
?>
<html>
<head>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
</head>
<body>
<center><span style="font-weight:bold;font-size:30pt">Search For Blood Group</span></center>
<br><br><br>
<span style="font-size:20pt">
<a href="Register.html">Register Now!</a>&nbsp;&nbsp;
<a href="Login.php">Login</a>&nbsp;&nbsp;
<a href="Discussion.php">Discussion Forum</a>
<br><br><br>
<fieldset style="width:75%">
<form action="make_req.php" method="GET">
Enter Blood Group:<input type="text" name="Search">
<br>
<input type="Button" value="Search" onClick="submit();">
</form>
</fieldset>
<br><br><br>
<a href="Logout.php">Logout</a>
</span>
</body>
</html>
