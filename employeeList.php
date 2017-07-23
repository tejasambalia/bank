<html>
<head>
<title>
	Employee List
</title>
<link rel="stylesheet" type="text/css" href='css/bootstrap.min.css'>
</head>

<body>
<div class="container">
  <h2>Employee List</h2>


<?php include '_Layout.php'; 
    include_once "db.php";

 $selectSQL = 'SELECT * FROM `details`';
 # Execute the SELECT Query
  if( !( $selectRes = mysqli_query( $con,$selectSQL ) ) ){
    echo 'Retrieval of data from Database Failed - #'.mysql_errno().': '.mysql_error();
  }else{
    
 ?>

  
<table class="table table-striped">
    <thead>
      <tr>
        <th>Employee No</th>
        <th>Employee Name</th>
        <th>Designation</th>
        <th>Department name</th>
        <th>Date of Joining</th>
        <th>Date of Birth</th>
        <th>Account No</th>
        <th>Gender</th>
        <th>View Details</th>
      </tr>
    </thead>
    <tbody>
     <?php

      if( mysqli_num_rows( $selectRes )==0 ){
        echo '<tr><td colspan="4">No Rows Returned</td></tr>';
      }else{
        while( $row = mysqli_fetch_assoc( $selectRes ) ){
          echo "<tr><td>{$row['EMPNUMBER']}</td><td>{$row['EMPNAME']}</td><td>{$row['DESIGNATION']}</td><td>{$row['DEPT_NAME']}</td><td>{$row['EMP_DOJ']}</td><td>{$row['EMP_DOB']}</td><td>{$row['ACCOUNT_NUMBER']}</td><td>{$row['EMP_GENDER']}</td><td><a href='viewEmployeeData.php?id={$row['id']}'>View Details</a></td></tr>\n";
        }
      }
    ?>
      
    </tbody>
  </table>
  <?php
  }

?>

</div>
</body>
</html>