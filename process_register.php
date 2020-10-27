<?php
require_once("connect.php");




$First_name=$_POST["fname"];
$Second_name=$_POST["sname"];
$Email_address=$_POST["eaddress"];
$User_name=$_POST["uname"];
$Password=$_POST["pword"];
$Date_of_birth=$_POST["dbirth"];
$Gender=$_POST["gender"];

$query="INSERT INTO user_details(First_name,Second_name,Email_address,Date_of_birth,Gender,username,password)VALUES('$First_name','$Second_name','$Email_address','$Date_of_birth','$Gender','$User_name','$Password')";

if(mysqli_query($link,$query))
{
	echo "  Record Added to the database";
}
else
{
	echo "Error".mysqli_error();	
}

?>