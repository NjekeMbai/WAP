<?php
$server="localhost";
$username="root";
$password="";
$database="food_guru";

$link=mysqli_connect($server,$username,$password,$database);

if(!$link)
{
	die("Could not connect".mysqli_connect_error());
}
echo "Connected Successfully";


?>