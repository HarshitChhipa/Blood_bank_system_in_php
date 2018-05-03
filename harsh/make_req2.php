<?php
session_start();
mysql_connect("localhost","root","");
mysql_select_db("userinfo");


if(!isset($_SESSION['user']))
{
Header("Location:Home.php",TRUE);
}

$UserID=$_REQUEST['id'];
$query="INSERT INTO requests VALUES(".$UserID.",".$_SESSION['user'].")";
$result=mysql_query($query);
Header("Location:req.php");
?>
