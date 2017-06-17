<?php
// error_reporting(E_ALL);
// ini_set('display_errors', 1);
include_once "db.php";

$file = fopen("Salary_Register.csv","r");
$data = array();
$count = 0;
//echo "<pre>";

while(!feof($file))
{
	$data = fgetcsv($file);
	if($count>1){
		//print_r($data);
		if(!in_array("GRAND_TOTAL:-",$data)&&!in_array("SUB_TOTAL-",$data)&&array_filter($data)){
			//$escaped_data = array_map('mysql_real_escape_string', array_values($data));
			$values  = implode("', '", $data);
			$query = "INSERT INTO `details` VALUES (NULL,'$values')";

			$res_select = mysqli_query($con, $query);
		}
	}	
	$count++;
}

fclose($file);