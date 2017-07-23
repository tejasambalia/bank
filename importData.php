<!DOCTYPE html>
<html>
<head>
<title>
	Import Data
</title>
<link rel="stylesheet" type="text/css" href='css/bootstrap.min.css'>

<script type="text/javascript" src ="JS/jquery-3.1.0.min.js"></script>
<script type="text/javascript" src ="JS/bootstrap.min.js"></script>
</head>

<body>
<div class="container">
  <h2>Import Data</h2>

  <?php include '_Layout.php';
      
      session_start();
      if(isset($_SESSION['successMsg'])) 
      {
          echo "<div class='alert alert-success alert-dismissible'>";
          echo '<a class="close" data-dismiss="alert" aria-label="close">&times;</a>';
          echo $_SESSION['successMsg'];
          echo "</div>";
          unset($_SESSION['successMsg']);
      }
      else if(isset($_SESSION['error']))
      {
          echo "<div class='alert alert-danger alert-dismissible'>";
          echo '<a class="close" data-dismiss="alert" aria-label="close">&times;</a>';
          echo $_SESSION['error'];
          echo "</div>";
          unset($_SESSION['error']);
      }

    ?>


<form action="uploadCSV.php" method="post" enctype="multipart/form-data">
  <div class="form-group">
    <label><h4>Upload Data file (CSV format) :</h4></label>
    <input type="file" class="form-control file" name="fileToUpload" id = "fileToUpload" required>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>

<br><br>
  <h4>Import employee data </h4>
  <a href="read-csv.php"><button type="button" class="btn btn-primary">Import data</button></a>
</div>
</body>
</html>