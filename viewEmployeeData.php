<html>
<head>
<title>
	Employee details
</title>
<style type="text/css">
	.colName{font-weight: bold;}
</style>
<link rel="stylesheet" type="text/css" href='css/bootstrap.min.css'>

</head>

<body>
<div class="container">
  <h2>Employee Details</h2>
  
<?php include '_Layout.php';
include_once "db.php";

$id = $_GET['id'];

 $selectSQL = "SELECT * FROM `details` WHERE id='".$id."'";
 # Execute the SELECT Query
  if( !(  $selectRes = mysqli_query( $con,$selectSQL ) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
  }else{
  	 $row = mysqli_fetch_assoc( $selectRes );

	echo "<div class='row'>

		<div class='col-md-2'>
			<h4 class = 'colName'>Employee No</h4>
		</div>
		<div class='col-md-3'>
			<h4> " .$row['EMPNUMBER'] ."</h4>
		</div>
		<div class='col-md-7'>
			<div class='col-md-offset-7'>
				<a class='btn btn-primary' href='printForm.php?id=".$row['EMPNUMBER']."' target='_blank'>Print Form</a>
			</div>
		</div>
		</div>

		<div class='row'>
		<div class='col-md-2'>
			<h4 class = 'colName'>Name</h4>
		</div>
		<div class='col-md-3'>
			<h4> " .$row['EMPNAME'] ."</h4>
		</div>
		</div>

		<div class='row'>
		<div class='col-md-2'>
			<h4 class = 'colName'>Designation</h4>
		</div>
		<div class='col-md-3'>
			<h4> " .$row['DESIGNATION'] ."</h4>
		</div>
		</div>

		<div class='row'>
		<div class='col-md-2'>
			<h4 class = 'colName'>Department name</h4>
		</div>
		<div class='col-md-3'>
			<h4> " .$row['DEPT_NAME'] ."</h4>
		</div>
		</div>

		<div class='row'>
		<div class='col-md-2'>
			<h4 class = 'colName'>Date of Joining</h4>
		</div>
		<div class='col-md-3'>
			<h4> " .$row['EMP_DOJ'] ."</h4>
		</div>
		</div>

		<div class='row'>
		<div class='col-md-2'>
			<h4 class = 'colName'>Date of Birth</h4>
		</div>
		<div class='col-md-3'>
			<h4> " .$row['EMP_DOB'] ."</h4>
		</div>
		</div>

		<div class='row'>
		<div class='col-md-2'>
			<h4 class = 'colName'>Account No</h4>
		</div>
		<div class='col-md-3'>
			<h4> " .$row['ACCOUNT_NUMBER'] ."</h4>
		</div>
		</div>

		<div class='row'>
		<div class='col-md-2'>
			<h4 class = 'colName'>Gender</h4>
		</div>
		<div class='col-md-3'>
			<h4> " .$row['EMP_GENDER'] ."</h4>
		</div>
		</div>

		<hr>
		<h3><b>Employee Salary Details</b></h3>
		<form action='saveOtherLoan.php' method='post'>

		<input type='hidden' name='empnumber' value='".$row['EMPNUMBER']."'>
		<input type='hidden' name='id' value='".$row['id']."'>

		
		<div class='row'>
		<div class='col-md-2'>
			<h4>Conventional charges</h4>
		</div>
		<div class='col-md-3'>
			<h4> " .$row['CON_ALL'] ."</h4>
		</div>
		</div>

		<div class='row'>
		<div class='col-md-2'>
			<h4>Employee Provident fund</h4>
		</div>
		<div class='col-md-3'>
			<h4> " .$row['EPF'] ."</h4>
		</div>
		</div>

		<div class='row'>
		<div class='col-md-2'>
			<h4>Housing Loan</h4>
		</div>
		<div class='col-md-2'>
			<input type='text' class='form-control' placeholder='Other Housing Loan' name='otherLoan' value='".$row['HSG_LN3']."'>
		</div>
		<div class='col-md-8'>
			<h4> LN 1 : ".$row['HSG_LN1']." RS | LN 2 : ".$row['HSG_LN2']." RS | LN 3 : ".$row['HSG_LN3']." RS | Total : " .($row['HSG_LN1'] + $row['HSG_LN2'] + $row['HSG_LN3']) ."</h4>
		</div>
		</div>

		<div class='row'>
		<div class='col-md-2'>
			<h4>Perquisites (PQ)</h4>
		</div>
		<div class='col-md-2'>
			<input type='text' class='form-control' placeholder='PERQUISITES' name='PERQUISITES' value='".$row['PERQUISITES']."'>
		</div>
		<div class='col-md-3'>
			<h4>PERQUISITES : ".$row['PERQUISITES']."</h4>
		</div>
		</div>

		<div class='row'>
		<div class='col-md-2'>
			<h4>LIC</h4>
		</div>
		<div class='col-md-2'>
			<input type='text' class='form-control' placeholder='Other LIC' name='otherLic' value='".$row['LIC_CUSTOM']."'>
		</div>
		<div class='col-md-8'>
			<h4> LIC : ".$row['LIC']." | LIC CUSTOM : ".$row['LIC_CUSTOM']." | Total : " .($row['LIC']+$row['LIC_CUSTOM'])  ."</h4>
		</div>
		</div>

		<div class='row'>
		<div class='col-md-2'>
			<h4>Professional tax</h4>
		</div>
		<div class='col-md-3'>
			<h4> " .$row['PTAX'] ."</h4>
		</div>
		</div>

		<div class='row'>
		<div class='col-md-2'>
			<h4>Income Tax</h4>
		</div>
		<div class='col-md-3'>
			<h4> " .$row['ITAX'] ."</h4>
		</div>
		</div>

		<div class='row'>
		<div class='col-md-2'>
			<h4>Bonus</h4>
		</div>
		<div class='col-md-3'>
			<h4> " .$row['BONUS'] ."</h4>
		</div>
		</div>

		<div class='row'>
		<div class='col-md-2'>
			<h4>Basic</h4>
		</div>
		<div class='col-md-3'>
			<h4> " .$row['BASIC'] ."</h4>
		</div>
		</div>

		<div class='row'>
		<div class='col-md-2'>
			<h4>Gross Salary</h4>
		</div>
		<div class='col-md-3'>
			<h4> " .$row['GROSS_EARNING'] ."</h4>
		</div>
		</div>
		<div class='row'>
		<div class='col-md-2'>
			<input type='submit' value='Save' class='btn btn-primary'>
		</div>
		
		</div>

		</form>

		";
	
	 
  }

?>

	<button type="button" class="btn btn-primary">Calculate Salary</button>
</div>
</body>
</html>
<script type="text/javascript" src='jquery-3.1.0.min'></script>
<script type="text/javascript">
	$('document').ready(function(){
		alert('')
	})
</script>