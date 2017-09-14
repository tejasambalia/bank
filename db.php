<?php
$host = "localhost";
$user = "root";
$pass = "root";
$db_name = "bank";

$con = mysqli_connect($host,$user ,$pass , $db_name);
if (mysqli_connect_errno())
{
	$_SESSION['error'] = "Failed to connect to MySQL: " . mysqli_connect_error();
	//error();
}