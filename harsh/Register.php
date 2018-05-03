<?php
//Function to check if all fields are filled
function checkEmpty()
{
if(empty($_POST['Dname']))
{
echo '<center><span style="color:red;font-size:15pt">Please Enter Complete Information!</span></center>';
include("Register.html");
exit;
}

else if(empty($_POST['Dage']))
{
echo '<center><span style="color:red;font-size:15pt">Please Enter Complete Information!</span></center>';
include("Register.html");
exit;
}

else if(empty($_POST['Dgroup']))
{
echo '<center><span style="color:red;font-size:15pt">Please Enter Complete Information!</span></center>';
include("Register.html");
exit;
}

else if(empty($_POST['Daddress']))
{
echo '<center><span style="color:red;font-size:15pt">Please Enter Complete Information!</span></center>';
include("Register.html");
exit;
}

else if(empty($_POST['Dcontact']))
{
echo '<center><span style="color:red;font-size:15pt">Please Enter Complete Information!</span></center>';
include("Register.html");
exit;
}

else if(empty($_POST['Demail']))
{
echo '<center><span style="color:red;font-size:15pt">Please Enter Complete Information!</span></center>';
include("Register.html");
exit;
}

else if(empty($_POST['Dpassword']))
{
echo '<center><span style="color:red;font-size:15pt">Please Enter Complete Information!</span></center>';
include("Register.html");
exit;
}

}


//Function to check if correct values are filled
function validate()
{

if(!ereg('[0-9]+',$_POST['Dage']))
{
echo '<center><span style="color:red;font-size:15pt">Invalid Age! Please Enter Again.</span></center>';
include("Register.html");
exit;
}

else if(!ereg('[a-zA-Z][+-]',$_POST['Dgroup']))
{
echo '<center><span style="color:red;font-size:15pt">Invalid Blood Group! Please Enter Again.</span></center>';
include("Register.html");
exit;
}

else if(!ereg('[0-9]{10,12}',$_POST['Dcontact']))
{
echo '<center><span style="color:red;font-size:15pt">Invalid Contact Number! Please Enter Again.</span></center>';
include("Register.html");
exit;
}

else if(!eregi('^[a-z0-9\._-]+@([a-z0-9][a-z0-9]*[a-z0-9]\.)+([a-z]+\.)?([a-z]+)',$_POST['Demail']))
{
echo '<center><span style="color:red;font-size:15pt">Invalid Email ID! Please Enter Again.</span></center>';
include("Register.html");
exit;
}

}


//Function to save entered values to database
function saveToDB()
{
@mysql_connect("localhost","root","")or die("Error connecting");
@mysql_select_db("userinfo")or die("Db not opened");
$Dname=$_POST['Dname'];
$Dage=$_POST['Dage'];
$Dgroup=$_POST['Dgroup'];
$Daddress=$_POST['Daddress'];
$Dcontact=$_POST['Dcontact'];
$Demail=$_POST['Demail'];
$Dpassword=md5($_POST['Dpassword']);

$query="
INSERT INTO `userinfo`.`general` (
`UserID` ,
`Name` ,
`Age` ,
`BGroup` ,
`Address` ,
`Contact` ,
`Email` ,
`Password`
)
VALUES (
NULL , '".$Dname."' , '".$Dage."' , '".$Dgroup."' , '".$Daddress."' , '".$Dcontact."' , '".$Demail."' , '".$Dpassword."');
";

if(mysql_query($query))
{
echo '<span style="font-size:20px">Thank You for Your Registration! Please Click Below To Login.<br>';
echo '<a href="Login.php">Click here to Login</a></span>';
}
else
echo "An error occured while registration. Please try again.";

}

checkEmpty();
validate();
saveToDB();
?>
