<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("userinfo");
function Logout()
{
unset($_SESSION['user']);
session_unset();
session_destroy();
Header("Location:Home.php",TRUE);
}

if(empty($_SESSION['user']))
{
Header("Location:Home.php",TRUE);
}
else
{
echo '<center><span style="font-weight:bold;font-size:30pt">Requests Page</span></center>
<br><br><br>
<span style="font-size:20pt">
<a href="Home.php">Home</a>&nbsp;&nbsp;
<a href="Register.html">Register Now!</a>&nbsp;&nbsp;
<a href="Discussion.php">Discussion Forum</a>
<br><br><br>';

echo "Requests Page. Here you will see the requests that you have made or others have made for your blood group. The contact details of the requests came and the requests that you have made will be shown to you.<br><br><br>";
echo "<b>Requests Came for Your Blood:</b><br><br>";


$UserID=$_SESSION['user'];

//Display Requests Came

$query1="SELECT * FROM requests WHERE DonorID='$UserID'";
$result=mysql_query($query1);
if(mysql_num_rows($result)==0)
echo "Currently No Requests Came for Your Blood.<br>";
else
{

while($row=mysql_fetch_array($result))
{
$reqID=$row[1];
$query2="SELECT * FROM general WHERE UserID='$reqID'";
$result2=mysql_query($query2);
while($row2=mysql_fetch_array($result2))
{
echo "<b>Name:</b> ".$row2[1]." <b>Contact:</b> ".$row2[5]." <b>Group:</b> ".$row2[3]."<br>"; 
}
}
echo "<br><br><br>";

}

//Make New Request
echo '<b><a href="make_req.php">Click Here to Make New Request</a></b><br><br><br>';

echo "<b>Requests Made By You:</b><br><br>";

//Display Requests Made

$query3="SELECT * FROM requests WHERE RequestID='$UserID'";
$result3=mysql_query($query3);

if(mysql_num_rows($result3) == 0 ) 
echo "Currently No Requests Made By You.";
else
{

while($row=mysql_fetch_array($result3))
{
$DonorID=$row[0];
$query4="SELECT * FROM general WHERE UserID='$DonorID'";
$result4=mysql_query($query4);
while($row2=mysql_fetch_array($result4))
{
echo "<b>Name:</b> ".$row2[1]." <b>Contact:</b> ".$row2[5]." <b>Group:</b> ".$row2[3]."<br>"; 
}

}

}
echo "<br><br>";
echo '<a href="Logout.php">Logout</a>';

}
?>
