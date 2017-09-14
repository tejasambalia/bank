<?php 
include_once "db.php";
error_reporting(E_ALL);
ini_set('display_errors', 1);
$empNumber =  $_POST['empnumber'];
$id =$_POST['id'];
if(isset($_POST['otherLoan']) && $_POST['otherLoan'] != null)
{
	$housingLoan = $_POST['otherLoan'];	

	$query = "update `details` set HSG_LN3 = $housingLoan where EMPNUMBER='".$empNumber."'";
	mysqli_query($con, $query);
}


if(isset($_POST['otherLic']) && $_POST['otherLic'] != null)
{
	$otherLIC = $_POST['otherLic'];

	$query = "update `details` set LIC_CUSTOM = $otherLIC where EMPNUMBER='".$empNumber."'";
	mysqli_query($con, $query);

	// $query_SELECT = "select count(*) from loan_details where EMPNUMBER='".$empNumber."'";

	// $res_select2 = mysqli_query($con, $query_SELECT);
	// if(mysqli_num_rows($res_select2))
	// {
	// 	$query_UPDATE = "update `loan_details` set DETAILS = $otherLIC where EMPNUMBER='".$empNumber."'";
	// 	mysqli_query($con, $query_UPDATE);	
	// }
	// else
	// {
	// 	$query_INSERT = "insert into loan_details (EMPNUMBER, DETAILS) values ($empNumber,$otherLIC)";	
	// 	mysqli_query($con, $query_INSERT);	
	// }
	
}

if(isset($_POST['PERQUISITES']) && $_POST['PERQUISITES'] != null){
	$PERQUISITES = $_POST['PERQUISITES'];

	$query = "update `details` set PERQUISITES = $PERQUISITES where EMPNUMBER='".$empNumber."'";
	mysqli_query($con, $query);
}

header("Location: viewEmployeeData.php?id=$id");

?>