<?php
session_start();
$target_dir = "CSVdata/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);

$uploadOk = 1;
$fileType = pathinfo($target_file,PATHINFO_EXTENSION);

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) 
{
    if($fileType != "csv")
    {
    	$_SESSION['error'] =  "Only CSV files are allowed";
    	$uploadOk = 0;
    	header("Location: importData.php");
		exit();
    }

	$newFileName = "Salary_Register.csv";

    
    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_dir . $newFileName )) 
    {
    	$_SESSION['successMsg'] = "The file has been uploaded.";
    	
        header("Location: importData.php"); /* Redirect browser */
		exit();
    } 
    else {
        $_SESSION['error'] = "Sorry, there was an error uploading your file.";
        header("Location: importData.php"); 
		exit();
    }
	
}
?>