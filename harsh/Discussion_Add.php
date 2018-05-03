<?php
$link=mysql_connect("localhost","root","");
mysql_select_db("userinfo")or die("Sorry! Your post cannot be added");

$name=$_POST['tname'];
$post=$_POST['tpost'];
$query="
INSERT INTO `userinfo`.`forum` (
`Time` ,
`Name` ,
`Post`
)
VALUES (
NOW(), '$name', '$post'
);
";

mysql_query($query)or die("Sorry! Your Post cannot be added");

Header("Location:Discussion.php");

?>
